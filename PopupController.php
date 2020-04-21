<?php
/**
 * @file
 * Contains \Drupal\mymodule\Controller\MyModuleController.
 */
namespace Drupal\example_popup\Controller;

use Drupal\Core\Controller\ControllerBase;

class PopupController extends ControllerBase {
	public function popup() {
		return array(
			'#type' => 'markup',
			'#markup' => t('<p><a class="use-ajax" data-dialog-options="{&quot;width&quot;:800}" data-dialog-type="modal" href="/node/1">Click Me</a></p>

'),
		);
	}
}