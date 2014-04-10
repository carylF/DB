window.onload = preload;

function preload()
{
	document.getElementById('cancel').onclick = homepageredirect;
}

function homepageredirect()
{
	location.replace('homepage.php');
}