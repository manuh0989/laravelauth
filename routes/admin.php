<?php
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::get('/', 'DashboardController@index')
->name('admin.index');

Route::get('/posts','DashboardController@posts')->name('admin.posts');



Route::get('/eventos','DashboardController@eventos')->name('admin.eventos');




Route::get('/posts/crear','DashboardController@crearPost')->name('post.crear');

Route::get('/posts/mostrar','DashboardController@mostrarPost')->name('post.mostrar');

Route::post('/posts/crear','DashboardController@storePost')->name('post.store');


Route::invalidUrl(function(){
	throw new NotFoundHttpException();
});





/*Route::any('{any}',function(){
	throw new NotFoundHttpException('pagina no encontrada');
})->where('ant','.*');*/

/*Route::fallback(function(){
	//return response()->view('errors/404',[],404);
	throw new NotFoundHttpException('pagina no encontrada');
});*/