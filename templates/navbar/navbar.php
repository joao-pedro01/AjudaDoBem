<section id="header">
    <a href="#"><img src="views/images/logo_oficial.png" class="logo" alt="logo"></a>
    <div>
        <ul id="navbar">
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="Doações.html">Doações</a></li>
            <li><a href="Blog.html">Blog</a></li>
            <li><a href="Sobre_nos.html">Sobre nós</a></li>
            <li><a href="Contato.html">Contato</a></li>
            <li id="lg-bag"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
            
            <a href="#" id="close"><i class="far fa-times"></i></a>


        </ul>
    </div>
    <div id="mobile">
        <a href="/AjudaDoBem/src/views/pages/login.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>

    <script>
    const bar = document.getElementById('bar');
    const close = document.getElementById('close');      
    const nav = document.getElementById('navbar');
if (bar){
   bar.addEventListener('click',() => {
    nav.classList.add('active');
   })
}
if(close){
    close.addEventListener('click',()=>{
        nav.classList.remove('active');
    })
}
    </script>
   <!--  <script scr="..\js\script.js"></script> -->
</section>