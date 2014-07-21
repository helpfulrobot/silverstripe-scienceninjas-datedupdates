<?php

class EventPage extends NewsPage {

	private static $description = 'A news article with event fields';

	private static $default_parent = 'NewsHolderPage';

	private static $can_be_root = false;

	private static $icon = 'datedupdates/images/icons/sitetree_images/flag.png';

	public $pageIcon = 'datedupdates/images/icons/sitetree_images/flag.png';

	private static $db = array(
		'EventDate' => 'Datetime',
		'EventLocation' => 'Varchar(255)'
	);

	public function fieldLabels($includerelations = true) {
		$labels = parent::fieldLabels($includerelations);
		$labels['EventLocation'] = _t('DateUpdatePage.EventDateFieldLabel', 'Event Date');
		$labels['EventLocation'] = _t('DateUpdatePage.EventLocationFieldLabel', 'Event Location');
		return $labels;
	}

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Event Details', new DatetimeField('EventDate', $this->fieldLabel('EventDate')));
		$fields->addFieldToTab('Root.Event Details', new TextField('Location', $this->fieldLabel('EventLocation')));
		return $fields;
	}
}

class EventPage_Controller extends NewsPage_Controller {

}