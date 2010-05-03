<?php

Object::add_extension('Member', 'FrameworkTestRole');
Object::add_extension('Member', 'FileUploadRole');

Object::add_extension('SiteConfig', 'CMSWorkflowSiteConfigDecorator');

CMSWorkflowSiteConfigDecorator::apply_active_config();

Director::addRules(100, array(
	'dev/regress/$Action/$ID' => 'FrameworktestRegressSessionAdmin'
));
?>