// $(function(){
//   $('body').on('click', 'a.nav-link', function(){
//     $('a.nav-link').removeClass('active');
//     $(this).closest('a.nav-link').addClass('active');
//   });
// });


// // Js code for active sidebar menus
$('#sidebarMenu .navbar-nav a').on('click', function () {
	$('#sidebarMenu .navbar-nav').find('li.active').removeClass('active');
	$(this).parent('li').addClass('active');
});
