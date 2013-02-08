<?php
namespace TvDatabase\HomeBundle\Command;

use Symfony\Bundle\TwigBundle\TwigEngine;

use Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Acme\StoreBundle\Entity\EAVAttributeValue;
use Acme\StoreBundle\AcmeStoreBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle;

class MailCommand extends ContainerAwareCommand
{
	protected function configure()
	{
		$this
		->setName('home:mail')
		->setDescription('Send emails')
// 		->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
// 		->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
// 		$name = $input->getArgument('name');
// 		if ($name) {
// 			$text = 'Hello '.$name;
// 		} else {
			$text = 'Hello';
// 		}

// 		if ($input->getOption('yell')) {
// 			$text = strtoupper($text);
// 		}
			$em = $this->getContainer()->get('doctrine');
			$em = $em->getManager();
// 			$em = $this->getDoctrine()->getManager();
			$catalogue = $em->getRepository('AcmeStoreBundle:MetaEAVEntityType');
			$query = $em->createQuery('SELECT u FROM AcmeStoreBundle:User as u');
			
			$results = $query->getResult();
			
// 			$message = $this->getContainer()->get('mailer');
		foreach($results as $user)
		{
			$inClause = ' IN(';
			foreach($user->getTVStations() as $station)
			{
				$inClause = $inClause  . ',' . strval($station->getTvID());
			}
			$inClause = $inClause . ') ';
			
			$pos = strpos( $inClause, ',' );
			if( $pos !== FALSE )
			{
				$inClause = substr_replace( $inClause, '', $pos, 1 );
			}
			$today = $today = date_create(date('Y-m-d'));
			$em->getRepository('AcmeStoreBundle:EAVEntity');
			$query = $em->createQuery('SELECT e FROM AcmeStoreBundle:EAVEntity e WHERE e.TvStation' . $inClause . 
									 'AND e.Datetime > :pre AND e.Datetime < :posle
									ORDER BY e.TvStation DESC, e.Datetime ASC')
									->setParameters(array(
															'pre' => $today->format('Y-m-d') . ' 00:00:00',
															'posle' => $today->format('Y-m-d') . ' 23:59:59'
												));
			$program = $query->getResult();
			//send email
			$twig = $this->getContainer()->get('twig');
			$message = \Swift_Message::newInstance()
			->setSubject("TV Program Schedule for " . $today->format('d.m.Y'))
			->setFrom("admin@symfonyserver.com")
			->setTo($user->getEmail())
			->setBody($twig->render('TvDatabaseHomeBundle:Default:mail.html.twig',
					array(
							'programs' => $program)),'text/html');
			
			$this->getContainer()->get('mailer')->send($message);
			$output->writeln('email sent to: ' . $user->getEmail());
		}
	}
}
?>