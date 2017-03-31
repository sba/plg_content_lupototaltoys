<?php

defined('_JEXEC') or die;

class plgContentLupototaltoys extends JPlugin
{
    public function onContentPrepare($context, &$article, &$params, $limitstart = 0)
    {
	    if (!class_exists( 'LupoModelLupo' )){
		    JLoader::import( 'lupo', JPATH_BASE . '/components/com_lupo/models' );
	    }

	    $model = new LupoModelLupo();

	    $totaltoys = $model->totalToys();

	    $article->text = str_replace('[totalspiele]',$totaltoys, $article->text);

        return true;
    }
}
