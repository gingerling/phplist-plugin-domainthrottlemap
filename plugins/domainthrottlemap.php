<?php

class domainthrottlemap extends phplistPlugin {
  public $name = "Group domains for throttling";
  public $coderoot = '';
  public $version = "0.1";
  public $authors = 'Michiel Dethmers';
  public $enabled = 1;
  public $description = 'Provide a grouping of domains for the purpose of domain throttling.';

  /** 
   * based on the domain, return a mapping for throttling
   * 
   * this means that domains that map to the same value will be grouped for throttling.
   */

  function throttleDomainMap ($domain) {
      
      switch (strtolower($domain)) {
	 	case '163.com':
		case '125.com':
		case 'yeah.com':
		  return "163"; break;	
      		case 'email.com':
		case 'usa.com':
		case 'myself.com':
		case 'consultant.com':
		case 'post.com':
		case 'europe.com':
		case 'asia.com':
		case 'iname.com':
		case 'writeme.com':
		case 'dr.com':
		case 'engineer.com':
		case 'cheerful.com':
		case 'accountant.com':
		case 'techie.com':
		case 'linuxmail.org':
		case 'uymail.com':
		case 'contractor.net':
		case 'activist.com':
		case 'adexec.com':
		case 'allergist.com':
		case 'alumni.com':
		case 'alumnidirector.com':
		case 'angelic.com':
		case 'appraiser.net':
		case 'archaeologist.com':
		case 'arcticmail.com':
		case 'artlover.com':
		case 'auctioneer.net':
		case 'bartender.net':
		case 'bikerider.com':
		case 'birdlover.com':
		case 'brew-meister.com':
		case 'cash4u.com':
		case 'chef.net':
		case 'chemist.com':
		case 'clerk.com':
		case 'clubmember.org':
		case 'collector.org':
		case 'columnist.com':
		case 'comic.com':
		case 'computer4u.com':
		case 'coolsite.net':
		case 'counsellor.com':
		case 'cyberservices.com':
		case 'deliveryman.com':
		case 'diplomats.com':
		case 'disposable.com':
		case 'doctor.com':
		case 'execs.com':
		case 'fastservice.com':
		case 'financier.com':
		case 'fireman.net':
		case 'gardener.com':
		case 'geologist.com':
		case 'graduate.org':
		case 'graphic-designer.com':
		case 'groupmail.com':
		case 'hairdresser.net':
		case 'homemail.com':
		case 'hot-shot.com':
		case 'instruction.com':
		case 'instructor.net':
		case 'insurer.com':
		case 'job4u.com':
		case 'journalist.com':
		case 'legislator.com':
		case 'lobbyist.com':
		case 'minister.com':
		case 'musician.org':
		case 'net-shopping.com':
		case 'optician.com':
		case 'orthodontist.net':
		case 'pediatrician.com':
		case 'photographer.net':
		case 'physicist.net':
		case 'planetmail.com':
		case 'planetmail.net':
		case 'politician.com':
		case 'presidency.com':
		case 'priest.com':
		case 'programmer.net':
		case 'publicist.com':
		case 'qualityservice.com':
		case 'radiologist.net':
		case 'realtyagent.com':
		case 'registerednurses.com':
		case 'repairman.com':
		case 'representative.com':
		case 'rescueteam.com':
		case 'salesperson.net':
		case 'secretary.net':
		case 'socialworker.net':
		case 'sociologist.com':
		case 'solution4u.com':
		case 'songwriter.net':
		case 'surgical.net':
		case 'teachers.org':
		case 'tech-center.com':
		case 'technologist.com':
		case 'theplate.com':
		case 'therapist.net':
		case 'toothfairy.com':
		case 'tvstar.com':
		case 'umpire.com':
		case 'webname.com':
		case 'worker.com':
		case 'workmail.com':
		case '2trom.com':
		case 'aircraftmail.com':
		case 'atheist.com':
		case 'blader.com':
		case 'boardermail.com':
		case 'brew-master.com':
		case 'bsdmail.com':
		case 'catlover.com':
		case 'cutey.com':
		case 'dbzmail.com':
		case 'doglover.com':
		case 'doramail.com':
		case 'galaxyhit.com':
		case 'greenmail.net':
		case 'hackermail.com':
		case 'hilarious.com':
		case 'keromail.com':
		case 'kittymail.com':
		case 'lovecat.com':
		case 'marchmail.com':
		case 'nonpartisan.com':
		case 'petlover.com':
		case 'snakebite.com':
		case 'toke.com':
		case 'cyberdude.com':
		case 'cybergal.com':
		case 'cyber-wizard.com':
		case 'housemail.com':
		case 'humanoid.net':
		case 'inorbit.com':
		case 'mail-me.com':
		case 'null.net':
		case 'rocketship.com':
		case 'acdcfan.com':
		case 'discofan.com':
		case 'elvisfan.com':
		case 'hiphopfan.com':
		case 'kissfans.com':
		case 'madonnafan.com':
		case 'metalfan.com':
		case 'ninfan.com':
		case 'oath.com':
		case 'ravemail.com':
		case 'reborn.com':
		case 'reggaefan.com':
		case 'bellair.net':
		case 'californiamail.com':
		case 'dallasmail.com':
		case 'nycmail.com':
		case 'pacific-ocean.com':
		case 'pacificwest.com':
		case 'sanfranmail.com':
		case 'africamail.com':
		case 'asia-mail.com':
		case 'australiamail.com':
		case 'berlin.com':
		case 'brazilmail.com':
		case 'chinamail.com':
		case 'dublin.com':
		case 'dutchmail.com':
		case 'englandmail.com':
		case 'europemail.com':
		case 'germanymail.com':
		case 'irelandmail.com':
		case 'israelmail.com':
		case 'italymail.com':
		case 'koreamail.com':
		case 'mexicomail.com':
		case 'moscowmail.com':
		case 'munich.com':
		case 'polandmail.com':
		case 'safrica.com':
		case 'samerica.com':
		case 'scotlandmail.com':
		case 'spainmail.com':
		case 'swedenmail.com':
		case 'swissmail.com':
		case 'torontomail.com':
		case 'disciples.com':
		case 'innocent.com':
		case 'muslim.com':
		case 'protestant.com':
		case 'reincarnate.com':
		case 'religious.com':
		case 'saintly.com':
		  return "1and1"; break;
    		case 'mail.ru':
    		case 'inbox.ru':
    		case 'list.ru':
    		case 'bk.ru':
      		  return "mail.ru"; break;	
      		case 'juno.com':
    		case 'netzero.com':
    		case 'mybluelight.com':
    		case 'emailmyname.com':
      		  return "united_online"; break;
      		case 'earthlink.net':
    		case 'mindspring.com':
    		case 'onemain.com':
      		  return "earthlink"; break;
    		case 'ameritect.net':
    		case 'att.net':
    		case 'bellsouth.net':
    		case 'flash.net':
    		case 'nvbell.net':
    		case 'pacbell.net':
    		case 'prodigy.net':
    		case 'rocketmail.com':
    		case 'sbcglobal.net':
    		case 'snet.net':
    		case 'swbell.net':
    		case 'wans.net':
    		case 'yahoo.at':
    		case 'yahoo.be':
    		case 'yahoo.bg':
    		case 'yahoo.ca':
    		case 'yahoo.cl':
    		case 'yahoo.co.hu':
    		case 'yahoo.co.id':
    		case 'yahoo.co.in':
    		case 'yahoo.co.kr':
    		case 'yahoo.co.nz':
    		case 'yahoo.co.th':
          	case 'yahoo.co.uk':
    		case 'yahoo.co.za':
    		case 'yahoo.com':
    		case 'yahoo.com.ar':
    		case 'yahoo.com.au':
    		case 'yahoo.com.br':
    		case 'yahoo.com.co':
    		case 'yahoo.com.hr':
		case 'yahoo.com.hx':
    		case 'yahoo.com.mx':
    		case 'yahoo.com.my':
    		case 'yahoo.com.pe':
    		case 'yahoo.com.ph':
    		case 'yahoo.com.sg':
    		case 'yahoo.com.tr':
    		case 'yahoo.cz':
    		case 'yahoo.de':
    		case 'yahoo.dk':
    		case 'yahoo.ee':
    		case 'yahoo.es':
    		case 'yahoo.fi':
    		case 'yahoo.fr':
    		case 'yahoo.gr':
    		case 'yahoo.hr':
    		case 'yahoo.hu':
    		case 'yahoo.ie':
    		case 'yahoo.in':
    		case 'yahoo.lt':
    		case 'yahoo.nl':
    		case 'yahoo.no':
    		case 'yahoo.pl':
    		case 'yahoo.pt':
    		case 'yahoo.ri':
    		case 'yahoo.se':
    		case 'yahoo.si':
    		case 'yahoogroups.co.kr':
    		case 'yahoogroups.com.cn':
    		case 'yahoogroups.com.sg':
    		case 'yahoogroups.com.tw':
    		case 'yahoogrupper.dk':
    		case 'yahoogruppi.it':
    		case 'yahooxtra.co.nz':
    		case 'ymail.com':
    		case 'y7mail.com':
    			  return "Yahoo"; break;	
      		case 'onedrive.net':
      		case 'windowsmobile.co.uk':
      		case 'xbox.com':
      		case 'onedrive.org':
      		case 'windowsmobile.org':
      		case 'xbox.co.uk':
      		case 'onedrive.co':
      		case 'windowsmobile.co':
      		case 'xbox.org':
      		case 'onedrive.eu':
      		case 'windowsphone.com':
      		case 'xbox.co':
      		case 'skype.com':
      		case 'windowsmobile.eu':
      		case 'xbox.eu':
      		case 'skype.org':
      		case 'windowsphone.co.uk':
      		case 'xbox360.com':
      		case 'skype.net':
      		case 'windowsphone.org':
      		case 'xbox360.co.uk':
      		case 'skype.co.uk':
      		case 'windowsphone.co':
      		case 'xbox360.co':
      		case 'skype.co':
      		case 'windowsphone.net':
      		case 'xbox360.eu':
      		case 'skype.eu':
      		case 'zune.com':
      		case 'xbox360.org':
      		case 'outlook.com':
      		case 'zune.co.uk':
      		case 'xboxone.com':
      		case 'outlook.org':
      		case 'zune.org':
      		case 'xboxone.co.uk':
      		case 'outlook.co':
      		case 'zune.net':
      		case 'xboxone.eu':
      		case 'outlook.eu':
      		case 'zune.co':
      		case 'xboxone.eu':
      		case 'windowsmobile.com':
      		case 'zune.eu':
      		case 'office.com':
      		case 'onedrive.co.uk':
      		case 'visualstudio.net':
      		case 'visualstudio.eu':
      		case 'onedrive.com':
      		case 'skydrive.com':
      		case 'visualstudio.co.uk':
      		case 'skydrive.co':
      		case 'visualstudio.co':
      		case 'visualstudio.com':
      		case 'microsoftvisualstudio.net':
      		case 'microsoftvisualstudio.com':
      		case 'sqlserver.net':
      		case 'microsoftsqlserver.com':
      		case 'microsoftsilverlight.net':
      		case 'microsoftsilverlight.org':
      		case 'live.eu':
      		case 'live.se':
      		case 'internetexplorer.co':
      		case 'microsoftsilverlight.com':
      		case 'live.org':
      		case 'internetexplorer.com':
      		case 'ie8.co':
      		case 'live.co':
      		case 'live.com':
      		case 'hotmail.co':
      		case 'live.net':
      		case 'hotmail.org':
      		case 'hotmail.eu':
      		case 'live.co.uk':
      		case 'hotmail.net':
      		case 'hotmail.co.uk':
      		case 'bingbar.com':
      		case 'hotmail.com':
      		case 'bingtoolbar.com':
      		case 'bingbar.net':
      		case 'bing.co':
      		case 'bing.co.uk':
      		case 'bing.net':
      		case 'bing.com':
      		case 'microsoft.co':
      		case 'microsoft.nl':
      		case 'microsoft.co.uk':
      		case 'microsoft.net':
      		case 'microsoft.org':
      		case 'microsoft.com':
      		case 'hotmail.nl':
      		case 'hotmail.be':
      		case 'msn.com':
      		case 'windowslive.com':
      		case 'live.nl':
      		case 'live.com.au':
      			return "Microsoft"; break;
		case 'onet.pl':
		case 'vp.pl':
		case 'op.pl':
		case 'onet.eu':
		case 'spoko.pl':
		case 'autograf.pl':
		case 'vip.onet.pl':
		case 'poczta.onet.pl':
		case 'onet.com.pl':
		case 'opoczta.pl':
		case 'amorki.pl':
		case 'buziaczek.pl':
		case 'pseudonim.pl':
			return "Onet.pl"; break;
            
          
          /* 
           * add more mappings here with the following structure
           * 
           * 
           * --------------------
           * case 'domain':
           * case 'otherdomain':
           *    return 'Main domain or provider name'; break;
           * ---------------------
           * 
           *   do not forget the "break" on the last line
           * 
           */
          


      }
      
      
      
      return false;
  }

    public function dependencyCheck()
    {
        global $plugins;

        return array(
            'phpList version 3.2.4 or later' => version_compare(VERSION, '3.2.3') > 0,
        );
    }
 

}
