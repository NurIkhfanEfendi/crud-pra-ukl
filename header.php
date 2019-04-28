<nav>
	<div>
		<ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="../jenis/read.php">Data Barang</a></li>
            <li><a href="../detail_peminjaman/read.php">Detail Peminjaman</a></li>
            <li><a class="logout" href="../login/logout.php">Logout</a></li>     
		</ul>
	</div>
</nav>
<style>
*, body{
    margin: 0;
    padding: 0;
}

body{
    background-color: #000000;
}
nav{
    position: relative;
    width: 100%;
    margin-bottom:20px;
    height: 60px;
    background-color: #000000;
    box-shadow: -1px -7px 20px 0px #888;
}
nav ul{
    position: relative;
    top: 20px;
    margin: 0;
    float: right;
    right: 10%;
}
nav ul li{
    float: left;
    display: block;
    margin: 0px 15px 0px 15px;
}
nav ul li a{
    text-decoration: none;
    color: #888;
    font-family: 'Helvetica', sans-serif;
}
nav ul li a:hover{
    color: #55a8fd;
}
.logout{
    background-color: #f44336;
    padding:13px;
    color:white;
    border-radius:5px;
}
</style>