<?php
class Kaltura_BaseController
{
	public function renderView($viewFile, array $params = array())
	{
		$viewRenderer = new Kaltura_ViewRenderer();
		return $viewRenderer->renderView($viewFile, $params);
	}
}