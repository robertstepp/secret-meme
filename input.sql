CREATE TABLE bookmarks(
  id INT  NOT NULL PRIMARY KEY AUTO_INCREMENT
, type VARCHAR(255) NOT NULL
, groupid VARCHAR(255) NOT NULL
, title VARCHAR(255) NOT NULL
, url VARCHAR(255) NOT NULL
, favicon VARCHAR(255)
, nsfw BIT  NOT NULL
, home BIT  NOT NULL
, inputtime TIMESTAMP default CURRENT_TIMESTAMP
);
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Virtualization','Oracle VM VirtualBox User Manual - UserManual.pdf','http://download.virtualbox.org/virtualbox/UserManual.pdf','https://www.virtualbox.org/graphics/VirtualBox.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Anonymous','Tor Project: Debian/Ubuntu Instructions','https://www.torproject.org/docs/debian.html.en','https://www.torproject.org/images/favicon.ico','1','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Anonymous','How to setup and use Tor Anonymity in Ubuntu « kyleabaker.com','http://kyleabaker.com/2011/01/11/how-to-setup-and-use-tor-anonymity-in-ubuntu/','','1','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Google','Google Voice','https://www.google.com/voice','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','E-mail','Gmail – robertstepp1369','https://mail.google.com','','0','1','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','E-mail','Gmail – robert@mysteppfamily.com','https://mail.mysteppfamily.com','','0','1','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Ubuntu','How to block usb device in Linux / Ubuntu','http://www.howopensource.com/2011/08/how-to-disable-and-enable-usb-device-in-linux/','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Python','Installing scikit-learn — scikit-learn 0.14 documentation','http://scikit-learn.org/stable/install.html','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Life Hack','8 Tips To Come Up With Winning Ideas When You Are Brainstorming Alone','http://www.makeuseof.com/tag/8-tips-come-winning-ideas-brainstorming-alone/','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Work','NSA Bahrain','Bahrain Off Limits Areas','https://mapsengine.google.com/map/u/0/edit?mid=zN1QoFnXQFQU.kLmjTX42zeD8','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Random Computer','Binary to Text (ASCII) Conversion','http://www.roubaixinteractive.com/PlayGround/Binary_Conversion/Binary_to_Text.asp','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Fun','Computer Stupidities','http://www.rinkworks.com/stupid/','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','ATC','digital - Terminal Procedures Search','http://naco.faa.gov/digital_tpp.asp?ver=1003&eff=03-11-2010&end=04-08-2010','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','ATC','Listen to Live ATC (Air Traffic Control) Communications | LiveATC.net','http://www.liveatc.net/','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Hobby','origami club','http://www.origami-club.com/en/','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Comic','PHD Comics Thesis Defense','http://www.phdcomics.com/comics/archive.php?comicid=567','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Comic','Piled Higher and Deeper','http://www.phdcomics.com/comics/archive_list.php','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Media','The Internet Movie Database (IMDb)','http://www.imdb.com/','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Work','Navy','Advancement Center','https://www2.netc.navy.mil/advancement/','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Work','Navy','Career Tools','http://www.npc.navy.mil/CareerInfo/StayNavyTools/CareerTools/','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Books','Free eBooks','http://www.getfreeebooks.com/','http://www.getfreeebooks.com/images/favicon.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Books','Free-ebooks.net','http://www.free-ebooks.net/','http://www.free-ebooks.net/favicon.ico?v1=2','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Work','Navy','Navy Advancement Center','https://www.advancement.cnet.navy.mil/courses/default.asp','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Work','Navy','NKO','https://wwwa.nko.navy.mil/portal/page?paf_pageId=page1&_requestid=61712','https://www.nko.navy.mil/nko-landing-theme/images/favicon.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Books','Safari Books','https://ssl.safaribooksonline.com/register','','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Fun','How to Be a Covert Spy Roundup Hack N Mod','http://www.hacknmod.com/hack/how-to-be-a-covert-spy-roundup/','http://hacknmod.com/wp-content/themes/hacknmodfinal2/favicon.ico','1','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','QR Code','Qurify.com - Make QR Codes (Advanced)','http://www.qurify.com/en/make_qr_codes_advanced/','http://www.visualead.com/favicon.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Banking','myPay','https://mypay.dfas.mil','https://mypay.dfas.mil/image/favicon.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Banking','Navy Federal Credit Union','https://www.navyfederal.org','https://www.navyfederal.org/favicon.ico?v=2','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Banking','USAA','https://www.usaa.com','https://content.usaa.com/mcontent/static_assets/Media/usaaicon.ico?cacheid=435112253_p','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Utilities','Babel Fish Translator','http://www.babelfish.com/','http://www.babelfish.com/favicon.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Utilities','C-Net Bandwidth Test','http://www.cnet.com/internet-speed-test/','http://www.cnet.com/favicon.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Utilities','What is my IP address?','http://whatismyipaddress.com/','http://cdn.whatismyipaddress.com/favicon.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Utilities','Wikipedia','http://www.wikipedia.org/','http://bits.wikimedia.org/favicon/wikipedia.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Utilities','Mailinator','http://www.mailinator.com/','','1','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Utilities','Zamzar – File Conversion','http://www.zamzar.com/','http://www.zamzar.com/favicon.ico','0','0','');
INSERT INTO bookmarks(id,type,groupid,title,url,favicon,nsfw,home,inputtime) VALUES (NULL,'Personal','Life Hack','Take Lessons','http://takelessons.com','http://takelessons.com/favicon.png','0','0','');
