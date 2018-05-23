<?php 
include "app/config.php";
date_default_timezone_set('asia/calcutta');
$browser_t="web";
$split = explode("?",$page_name);
if ($page_name=='') {$index="active";
	include $browser_t.'/index.php';
	}
	
	elseif ($page_name=='index') {$index="active";
	include $browser_t.'/index.php';
	}
	
	elseif ($page_name=='about') {$about="active";
	include $browser_t.'/about.php';
	}

    elseif ($page_name=='media') {$media="active";
	include $browser_t.'/media.php';
	}
 
    elseif ($page_name=='test_series') {$test_series="active";
	include $browser_t.'/test_series.php';
	}
    
    elseif ($page_name=='news_events') {$news_events="active";
	include $browser_t.'/news_events.php';
	}
	
	elseif ($page_name=='Faculties') {$faculties="menu__item--current";
	include $browser_t.'/faculties.php';
	}
	
	elseif ($page_name=='gallery') {$gallery="active";
	include $browser_t.'/gallery.php';
	}

    elseif ($page_name=='csir_net') {$csir_net="active";
	include $browser_t.'/csir_net.php';
	}

    
    elseif ($page_name=='drdo') {$drdo="active";
	include $browser_t.'/drdo.php';
	}

    elseif ($page_name=='barc') {$barc="active";
	include $browser_t.'/barc.php';
	} 


    elseif ($page_name=='bhu') {$bhu="active";
	include $browser_t.'/bhu.php';
	} 


    elseif ($page_name=='du') {$du="active";
	include $browser_t.'/du.php';
	} 

    elseif ($page_name=='gate') {$gate="active";
	include $browser_t.'/gate.php';
	} 

    elseif ($page_name=='iit_jam_iisc') {$iit_jam_iisc="active";
	include $browser_t.'/iit_jam_iisc.php';
	} 

    elseif ($page_name=='ism') {$ism="active";
	include $browser_t.'/ism.php';
	}

    elseif ($page_name=='jest') {$jest="active";
	include $browser_t.'/jest.php';
	}

    elseif ($page_name=='jnu') {$jnu="active";
	include $browser_t.'/jnu.php';
	}

    elseif ($page_name=='tifr') {$tifr="active";
	include $browser_t.'/tifr.php';
	}

	
	elseif ($page_name=='contact') {$contact="active";
	include $browser_t.'/contact.php';
	}
	
	
    elseif ($page_name=='courses') {$courses="menu__item--current";
	include $browser_t.'/courses.php';
	}

    elseif ($page_name=='NewsAndEvents') {$NewsAndEvents="menu__item--current";
	include $browser_t.'/NewsAndEvents.php';
	}

    

    

   
 

	elseif ($page_name=='error.html') {
	include $browser_t.'/404.php';	}
else
	{
		$index="active";
		include $browser_t.'/index.php';
	}
?>