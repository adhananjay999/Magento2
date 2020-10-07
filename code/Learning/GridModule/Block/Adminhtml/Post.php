<?php
namespace Learning\GridModule\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_post';
		$this->_blockGroup = 'Learning_GridModule';
		$this->_headerText = __('Customers');
		$this->_addButtonLabel = __('Create New Customer');
		parent::_construct();
	}
}