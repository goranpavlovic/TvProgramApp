
function setHeaderPlace()
{
	var header = document.getElementById('mainheader');
	var headerContainer = document.getElementById('header');
	var clntContHeight = headerContainer.clientHeight;
	var clntHeight = header.clientHeight;
	header.style.position = 'relative';
	header.style.top = (Math.floor(clntContHeight / 2) 
		- Math.floor( clntHeight / 2 ) ).toString().concat('px');
}

function mainInit()
{
	setHeaderPlace();
}
