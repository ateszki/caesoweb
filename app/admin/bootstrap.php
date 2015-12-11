<?php

/*
 * Describe you custom columns and form items here.
 *
 * There is some simple examples what you can use:
 *
 *		Column::register('customColumn', '\Foo\Bar\MyCustomColumn');
 *
 * 		FormItem::register('customElement', \Foo\Bar\MyCustomElement::class);
 *
 * 		FormItem::register('otherCustomElement', function (\Eloquent $model)
 * 		{
 *			AssetManager::addStyle(URL::asset('css/style-to-include-on-page-with-this-element.css'));
 *			AssetManager::addScript(URL::asset('js/script-to-include-on-page-with-this-element.js'));
 * 			if ($model->exists)
 * 			{
 * 				return 'My edit code.';
 * 			}
 * 			return 'My custom element code';
 * 		});
 */

FormItem::register('CustomImagenNoticia', function (\Eloquent $model)
  		{
  			$img = $model->imagen();
  			if($img){
  				$imghtml = "<div><img width='25%' src='".URL::to('noticias')."/".$model->id."/imagen'></div>";
  			} else {
  				$imghtml = "";
  			}
  			return '<div class="form-group">'.$imghtml.'<label for="imagen">Imagen (1600px x 550px)</label><input class="form-control"  accept=".jpg,.png,.gif" type="file" name="imagen"></div>';
  		});