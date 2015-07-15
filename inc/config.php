<?php

/*-----------------------------
Menu configuration
------------------------------*/

	$bus_submenu = array(
		array(	'name'		=> 'Chairman&rsquo;s Statement',
				'slug'		=> 'chairman-statement',
				'id'		=> '01'
		),
		array(	'name'		=> 'Chief Executive&rsquo;s Review',
				'slug'		=> 'ceo-review',
				'id'		=> '02'
		),
		array(	'name'		=> 'Operational Review',
				'slug'		=> 'operational-review',
				'id'		=> '03'
		),
		array(	'name'		=> 'Corporate Strategy &amp; Business Model',
				'slug'		=> 'strategy-business-model',
				'id'		=> '04'
		),
		array(	'name'		=> 'Key Performance Indicators',
				'slug'		=> 'kpi',
				'id'		=> '05'
		),
		array(	'name'		=> 'Oil and Gas Reserves',
				'slug'		=> 'reserves',
				'id'		=> '06'
		),
		array(	'name'		=> 'Health, Safety, Environmental and Social Review',
				'slug'		=> 'hses-review',
				'id'		=> '07'
		),
		array(	'name'		=> 'Financial Review',
				'slug'		=> 'financial-review',
				'id'		=> '08'
		)
	);


	$gov_submenu = array(
		array(	'name'		=> 'Company Directors',
				'slug'		=> 'company-directors',
				'id'		=> '01'
		),
		array(	'name'		=> 'Directors&rsquo; Report',
				'slug'		=> 'directors-report',
				'id'		=> '02'
		),
		array(	'name'		=> 'Directors&rsquo; Remuneration Report',
				'slug'		=> 'directors-remuneration-report',
				'id'		=> '03'
		),
		array(	'name'		=> 'Corporate Governance Statement',
				'slug'		=> 'corporate-governance-statement',
				'id'		=> '04'
		),
		array(	'name'		=> 'Audit Committee Report',
				'slug'		=> 'audit-committee-report',
				'id'		=> '05'
		),
		array(	'name'		=> 'Statement of Directors&rsquo; Responsibilities',
				'slug'		=> 'directors-responsibilities',
				'id'		=> '06'
		)
	);

	$acc_submenu = array(
		array(	'name'		=> 'Independent Auditor&rsquo;s Report',
				'slug'		=> 'auditor-report',
				'id'		=> '01'
		),
		array(	'name'		=> 'Consolidated Income Statement',
				'slug'		=> 'consolidated-income-statement',
				'id'		=> '02'
		),
		array(	'name'		=> 'Consolidated Balance Sheet',
				'slug'		=> 'consolidated-balance-sheet',
				'id'		=> '03'
		),
		array(	'name'		=> 'Consolidated Statement of Changes in Equity',
				'slug'		=> 'consolidated-changes-equity',
				'id'		=> '04'
		),
		array(	'name'		=> 'Consolidated Cashflow Statement',
				'slug'		=> 'consolidated-cashflow-statement',
				'id'		=> '05'
		),
		array(	'name'		=> 'Company Balance Sheet',
				'slug'		=> 'company-balance-sheet',
				'id'		=> '06'
		),
		array(	'name'		=> 'Company Statement of Changes in Equity',
				'slug'		=> 'company-changes-equity',
				'id'		=> '07'
		),
		array(	'name'		=> 'Company Cashflow Statement',
				'slug'		=> 'company-cashflow-statement',
				'id'		=> '08'
		),
		array(	'name'		=> 'Notes to the Financial Statements',
				'slug'		=> 'notes',
				'id'		=> '09'
		)
	);

	$info_submenu = array(
		array(	'name'		=> 'Share Information',
				'slug'		=> 'share-information',
				'id'		=> '01'
		),
		array(	'name'		=> 'Statement of Licence Holdings',
				'slug'		=> 'licence-holdings',
				'id'		=> '02'
		),
		array(	'name'		=> 'Glossary',
				'slug'		=> 'glossary',
				'id'		=> '03'
		),
		array(	'name'		=> 'Corporate Information',
				'slug'		=> 'corporate-information',
				'id'		=> '04'
		)
	);

	$structure = array(
		array(	'name'		=> 'Business Review',
				'type'    	=> 'multi',
				'slug'		=> 'business-review',
				'folder'	=> 'bus',
				'submenu'	=> $bus_submenu
		), 
		array(	'name'		=> 'Corporate Governance',
				'type'		=> 'multi',
				'slug'		=> 'corporate-governance',
				'folder'	=> 'gov',
				'submenu'	=> $gov_submenu
		),
		array(	'name'		=> 'Financial Statements',
				'type'		=> 'multi',
				'slug'		=> 'financial-statements',
				'folder'	=> 'acc',
				'submenu'	=> $acc_submenu
		),
		array(	'name'		=> 'Other Information',
				'type'		=> 'multi',
				'slug'		=> 'other-information',
				'folder'	=> 'info',
				'submenu'	=> $info_submenu
		)
	);

	$folders = array();

	foreach ($structure as $item)
	{
		if ( $item[type] == 'single' )
		{
			$folders[$item['slug']] = array(
				$item['folder']
			);
		}
		else
		{
			$array = array();
			foreach ($item['submenu'] as $sub_item)
			{
				$array[$sub_item['slug']] = $sub_item['id'];
			}

			$folders[$item['slug']] = array(
				$item['folder'],
				$array
			);
		}
	}

/*-----------------------------
PHP Functions
------------------------------*/

function get_body_class()
{
	if(!isset($_GET['cat']))
	{
		echo 'class="home"';
	}
	else if( !isset($_GET['id']))
	{
		echo 'class="' . $_GET['cat'] . '"';
	}
	else
	{
		echo 'class="' . $_GET['id'] . '"';
	}
}

function get_active_menu($slug)
{
	if(!isset($_GET['cat']) && $slug == 'home')
	{
		return ' class="current"';
	}
	else if( $_GET['cat'] == $slug )
	{
		return ' class="current"';
	}
}

?>