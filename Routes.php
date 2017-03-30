<?php
Route::set('', function(){
	Root::CreateView("Root");
});

Route::set('about-us', function(){
	AboutUS::CreateView("AboutUS");
});

Route::set('index.php', function(){
	Root::CreateView("Root");
});

Route::set('sign-in', function(){
	SignIn::CreateView("SignIn");
})
?>