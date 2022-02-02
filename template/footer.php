 <!-- footer -->
 <footer class="blue darken-2 white-text center" style="bottom: 0; padding: 5px;">
     <p class="flow-text">Multimedia J-YES Osmo. Copyright 2022</p>
 </footer>

 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
 <script>
const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav);
const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
    height: 450,
    duration: 600,
    interval: 10000
});

const materialbox = document.querySelectorAll('.materialboxed');
M.Materialbox.init(materialbox);

const scrollSpy = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scrollSpy, {
    scrollOffset: 50
});
 </script>
 </body>

 </html>