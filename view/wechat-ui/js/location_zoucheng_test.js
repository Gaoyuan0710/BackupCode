// jshint ignore: start
+function($){

$.rawCitiesData = [
  {
    "name":"高新区",
    "code":"820000", 
    "sub":[
      {
        "name":"高新区1",
        "code":"820100", 
        "sub":[
          {
            "name":"高新区11",
            "code":"820101" 
          },
          {
            "name":"高新区12",
            "code":"820102"
          },
          {
            "name":"高新区13",
            "code":"820103"
          },
          {
            "name":"高新区14",
            "code":"820104"
          },
          {
            "name":"高新区1-5",
            "code":"820105"
          }
        ]
      },
    {
        "name":"高新区2",
        "code":"820100",
        "sub":[
          {
            "name":"高新区21",
            "code":"820101"
          },
          {
            "name":"高新区22",
            "code":"820102"
          },
          {
            "name":"高新区23",
            "code":"820103"
          },
          {
            "name":"高新区2-4",
            "code":"820104"
          },
          {
            "name":"高新区25",
            "code":"820105"
          }
        ]
      }
    ]
  },
  {
      "name":"邹城市", 
      "code":"101010", 
      "sub":
          [
          {
              "name":" 弃用小区", 
              "code":"101110", 
              "sub":
                  [
                  {
                      "name":"弃用小区", 
                      "code":"101111"
                  },
              ]
          },
          {
              "name":" 郭里镇", 
              "code":"101210", 
              "sub":
                  [
                  {
                      "name":"东郭村", 
                      "code":"101211"},{"name":"卧牛村", "code":"101212"},{"name":"侍玉村", "code":"101213"},{"name":"东张庄村", "code":"101214"},{"name":"前黄村（FTTH）", "code":"101215"},{"name":"羊石山村（FTTH）", "code":"101216"},{"name":"宋山村（FTTH）", "code":"101217"},{"name":"宫庄社区（FTTH）", "code":"101218"},{"name":"爷娘庙东村", "code":"101219"},{"name":"郭里一村", "code":"101220"},{"name":"西郭村", "code":"101221"},{"name":"郭里四村", "code":"101222"},{"name":"上镇", "code":"101223"},{"name":"高李村", "code":"101224"},{"name":"上屯村", "code":"101225"},{"name":"爷娘庙西村", "code":"101226"},{"name":"郭里镇街道", "code":"101227"},{"name":"下镇", "code":"101228"},{"name":"下屯村", "code":"101229"},{"name":"后黄山（FTTH）", "code":"101230"},{"name":"郭里五村", "code":"101231"},]},{"name":" 北宿镇", "code":"101310", "sub":[{"name":"后贾村", "code":"101311"},{"name":"孟楼（FTTH）", "code":"101312"},{"name":"北宿矿区（重复）", "code":"101313"},{"name":"南渐兴村", "code":"101314"},{"name":"东毛堂（FTTH）", "code":"101315"},{"name":"北宿大道", "code":"101316"},{"name":"前贾", "code":"101317"},{"name":"赵厂村", "code":"101318"},{"name":"谷堆村（FTTH）", "code":"101319"},{"name":"吴官庄村", "code":"101320"},{"name":"东江村", "code":"101321"},{"name":"南渐兴", "code":"101322"},{"name":"西江村（FTTH）", "code":"101323"},{"name":"羊厂（FTTH）", "code":"101324"},{"name":"大岗村（FTTH）", "code":"101325"},{"name":"东沙村", "code":"101326"},{"name":"罗厂社区（FTTH）", "code":"101327"},{"name":"南屯村（FTTH）", "code":"101328"},{"name":"梁岗村", "code":"101329"},{"name":"小贾村", "code":"101330"},{"name":"北宿镇街道", "code":"101331"},{"name":"南屯", "code":"101332"},{"name":"前万", "code":"101333"},{"name":"辛庄社区", "code":"101334"},{"name":"北屯村", "code":"101335"},{"name":"西岗村（FTTH）", "code":"101336"},{"name":"郭庄村", "code":"101337"},{"name":"中西毛堂村（FTTH）", "code":"101338"},{"name":"北宿矿区（FTTH）", "code":"101339"},{"name":"岳庄村", "code":"101340"},{"name":"三丁村", "code":"101341"},{"name":"大小北（FTTH）", "code":"101342"},]},{"name":" 田黄镇", "code":"101410", "sub":[{"name":"圈里村（FTTH）", "code":"101411"},{"name":"东罗村", "code":"101412"},{"name":"大张庄", "code":"101413"},{"name":"肖沟", "code":"101414"},{"name":"等庄村（FTTH）", "code":"101415"},{"name":"律庄村", "code":"101416"},{"name":"河西村（FTTH）", "code":"101417"},{"name":"西罗（FTTH）", "code":"101418"},{"name":"枣园", "code":"101419"},{"name":"下鲍村", "code":"101420"},{"name":"辛庄村（FTTH）", "code":"101421"},{"name":"田黄村（FTTH）", "code":"101422"},{"name":"西埠", "code":"101423"},{"name":"后峪村（FTTH）", "code":"101424"},{"name":"瓦曲", "code":"101425"},{"name":"凉水泉村（FTTH）", "code":"101426"},{"name":"拐子河村", "code":"101427"},{"name":"大山头村", "code":"101428"},{"name":"大刘村", "code":"101429"},{"name":"等庄新村", "code":"101430"},{"name":"小山头村（FTTH）", "code":"101431"},{"name":"田黄镇街道", "code":"101432"},{"name":"深沟村（FTTH）", "code":"101433"},]},{"name":" 岗山街道办事处", "code":"101510", "sub":[{"name":"太平东路", "code":"101511"},{"name":"鲁苑街", "code":"101512"},{"name":"建业街", "code":"101513"},{"name":"欧兰路", "code":"101514"},{"name":"裕民路", "code":"101515"},{"name":"岗山北路", "code":"101516"},{"name":"护驾山路", "code":"101517"},{"name":"公园路", "code":"101518"},{"name":"金山大道", "code":"101519"},{"name":"货仓路", "code":"101520"},{"name":"牙山路", "code":"101521"},{"name":"连青山路", "code":"101522"},{"name":"崇义路", "code":"101523"},{"name":"设计院路", "code":"101524"},{"name":"昌平山路", "code":"101525"},{"name":"岗山路", "code":"101526"},{"name":"凤凰山路", "code":"101527"},{"name":"智慧路", "code":"101528"},{"name":"朱山村", "code":"101529"},{"name":"岗山南路", "code":"101530"},{"name":"四基山路", "code":"101531"},{"name":"龙山路", "code":"101532"},{"name":"古路街", "code":"101533"},{"name":"北外环", "code":"101534"},{"name":"东滩路", "code":"101535"},{"name":"接驾山路", "code":"101536"},{"name":"铁山路", "code":"101537"},{"name":"怡宁家园多层", "code":"101538"},{"name":"峄山路", "code":"101539"},{"name":"东外环路", "code":"101540"},{"name":"燕京大道", "code":"101541"},{"name":"平阳路", "code":"101542"},{"name":"宏达路", "code":"101543"},{"name":"太平路", "code":"101544"},]},{"name":" 平阳寺镇", "code":"101610", "sub":[{"name":"郑行村", "code":"101611"},{"name":"前鲍", "code":"101612"},{"name":"北林村", "code":"101613"},{"name":"陈庄", "code":"101614"},{"name":"横河村（FTTH）", "code":"101615"},{"name":"后鲍", "code":"101616"},{"name":"黄厂村", "code":"101617"},{"name":"鲍厂社区", "code":"101618"},{"name":"前后韩（FTTH）", "code":"101619"},{"name":"鲍店矿家属区（FTTH）", "code":"101620"},{"name":"中鲍", "code":"101621"},{"name":"新庄村", "code":"101622"},{"name":"平阳寺街道", "code":"101623"},]},{"name":" 大束镇", "code":"101710", "sub":[{"name":"张家屋（FTTH）", "code":"101711"},{"name":"赵庄村", "code":"101712"},{"name":"卧牛村", "code":"101713"},{"name":"官厅（FTTH）", "code":"101714"},{"name":"驳家庙", "code":"101715"},{"name":"梨杭村（FTTH）", "code":"101716"},{"name":"刘付村", "code":"101717"},{"name":"梭庄村", "code":"101718"},{"name":"来付村", "code":"101719"},{"name":"土旺", "code":"101720"},{"name":"二道河村", "code":"101721"},{"name":"王付村", "code":"101722"},{"name":"付堂（FTTH）", "code":"101723"},{"name":"葛炉山村", "code":"101724"},{"name":"西山村", "code":"101725"},{"name":"东西寨", "code":"101726"},{"name":"赵东村", "code":"101727"},{"name":"小朱庄（FTTH）", "code":"101728"},{"name":"羊山村（FTTH）", "code":"101729"},{"name":"崇义路", "code":"101730"},{"name":"石庄村", "code":"101731"},{"name":"黄庙村", "code":"101732"},{"name":"二沟（FTTH）", "code":"101733"},{"name":"袁麻", "code":"101734"},{"name":"崮尚村", "code":"101735"},{"name":"曹村", "code":"101736"},{"name":"孔庄（FTTH）", "code":"101737"},{"name":"侯洼村", "code":"101738"},{"name":"中山村（FTTH）", "code":"101739"},{"name":"大束北葛", "code":"101740"},{"name":"南桑庄", "code":"101741"},{"name":"南葛村", "code":"101742"},{"name":"董岭村（FTTH）", "code":"101743"},{"name":"孟付村", "code":"101744"},{"name":"水河村", "code":"101745"},{"name":"凰翥", "code":"101746"},{"name":"杜东村", "code":"101747"},{"name":"灰埠村", "code":"101748"},{"name":"大束镇驻地（FTTH）", "code":"101749"},{"name":"云山营（FTTH）", "code":"101750"},{"name":"付庄社区", "code":"101751"},{"name":"孔陈村", "code":"101752"},{"name":"武家庄村（FTTH）", "code":"101753"},{"name":"岗上村", "code":"101754"},{"name":"东山（FTTH）", "code":"101755"},{"name":"张东村", "code":"101756"},{"name":"安平（FTTH）", "code":"101757"},{"name":"匡庄街", "code":"101758"},{"name":"三合村", "code":"101759"},{"name":"孔付村", "code":"101760"},]},{"name":" 看庄镇", "code":"101810", "sub":[{"name":"倪看（FTTH）", "code":"101811"},{"name":"白水村（FTTH）", "code":"101812"},{"name":"兴隆村", "code":"101813"},{"name":"郭山村（FTTH）", "code":"101814"},{"name":"后屹（FTTH）", "code":"101815"},{"name":"土山洼村（FTTH）", "code":"101816"},{"name":"赵家洼村（FTTH）", "code":"101817"},{"name":"看庄村", "code":"101818"},{"name":"龙泉村", "code":"101819"},{"name":"西后圪村", "code":"101820"},{"name":"尚庄（FTTH）", "code":"101821"},{"name":"集山沟村", "code":"101822"},{"name":"林前村", "code":"101823"},{"name":"西柳", "code":"101824"},{"name":"看庄镇街道", "code":"101825"},{"name":"保安庄村", "code":"101826"},{"name":"前圪村", "code":"101827"},{"name":"东柳", "code":"101828"},{"name":"刘官庄村", "code":"101829"},{"name":"看庄水泥厂", "code":"101830"},{"name":"金山村", "code":"101831"},{"name":"九山庄", "code":"101832"},{"name":"黄湾村（FTTH）", "code":"101833"},{"name":"孙看村（FTTH）", "code":"101834"},{"name":"温石村（FTTH）", "code":"101835"},{"name":"孟官庄（FTTH）", "code":"101836"},{"name":"土门沟（FTTH）", "code":"101837"},{"name":"七贤村", "code":"101838"},{"name":"白石村", "code":"101839"},{"name":"王楼李楼（FTTH）", "code":"101840"},{"name":"大小付楼（FTTH）", "code":"101841"},{"name":"西八里村", "code":"101842"},]},{"name":" 石墙镇", "code":"101910", "sub":[{"name":"羊绪村（FTTH）", "code":"101911"},{"name":"岳庄社区", "code":"101912"},{"name":"车路口（FTTH）", "code":"101913"},{"name":"常峪村", "code":"101914"},{"name":"蔡西村", "code":"101915"},{"name":"古路口村", "code":"101916"},{"name":"面坊村", "code":"101917"},{"name":"石墙镇驻地", "code":"101918"},{"name":"兴石街", "code":"101919"},{"name":"沃里村", "code":"101920"},{"name":"纸坊村", "code":"101921"},{"name":"高庄（FTTH）", "code":"101922"},{"name":"石墙镇街道", "code":"101923"},{"name":"王场村", "code":"101924"},{"name":"朱山庄村", "code":"101925"},{"name":"蔡东村", "code":"101926"},{"name":"江庄村", "code":"101927"},{"name":"樊山村", "code":"101928"},{"name":"九山村", "code":"101929"},{"name":"大季社区", "code":"101930"},{"name":"深井村", "code":"101931"},{"name":"望云村（FTTH）", "code":"101932"},{"name":"铁刘（FTTH）", "code":"101933"},{"name":"镇西村", "code":"101934"},{"name":"前楼村", "code":"101935"},{"name":"白山村（FTTH）", "code":"101936"},]},{"name":" 香城镇", "code":"102010", "sub":[{"name":"尖山社区（FTTH）", "code":"102011"},{"name":"前刘村（FTTH）", "code":"102012"},{"name":"大莫亭（FTTH）", "code":"102013"},{"name":"瓦石（FTTH）", "code":"102014"},{"name":"官庄（FTTH）", "code":"102015"},{"name":"前韩桃园村（FTTH）", "code":"102016"},{"name":"古路湾（FTTH）", "code":"102017"},{"name":"前相（FTTH）", "code":"102018"},{"name":"大山阴（FTTH）", "code":"102019"},{"name":"房桃村（FTTH）", "code":"102020"},{"name":"孙王村（FTTH）", "code":"102021"},{"name":"东西洪洋（FTTH）", "code":"102022"},{"name":"田王村（FTTH）", "code":"102023"},{"name":"小山阴（FTTH）", "code":"102024"},{"name":"后相河村", "code":"102025"},{"name":"后相村", "code":"102026"},{"name":"北齐村", "code":"102027"},{"name":"羊皮（FTTH）", "code":"102028"},{"name":"田石（FTTH）", "code":"102029"},{"name":"银河寺（FTTH）", "code":"102030"},{"name":"陈岭（FTTH）", "code":"102031"},{"name":"万庄村", "code":"102032"},{"name":"郭桃（FTTH）", "code":"102033"},{"name":"不乱沟村（FTTH）", "code":"102034"},{"name":"香城镇街道", "code":"102035"},{"name":"大河滩（FTTH）", "code":"102036"},{"name":"付邱村（FTTH）", "code":"102037"},{"name":"前相河", "code":"102038"},{"name":"东西徐桃园老龙湾（FTTH）", "code":"102039"},{"name":"洪山庄", "code":"102040"},{"name":"大北王（FTTH）", "code":"102041"},{"name":"詹邱社区（FTTH）", "code":"102042"},{"name":"龙水村", "code":"102043"},{"name":"大黄村", "code":"102044"},{"name":"詹邱社区二期", "code":"102045"},{"name":"李桃园（FTTH）", "code":"102046"},]},{"name":" 唐村镇", "code":"102110", "sub":[{"name":"秦官村", "code":"102111"},{"name":"白庄（FTTH）", "code":"102112"},{"name":"唐村镇街道", "code":"102113"},{"name":"第六老年公寓", "code":"102114"},{"name":"后唐", "code":"102115"},{"name":"孔庄村", "code":"102116"},{"name":"侯庄村", "code":"102117"},{"name":"西龙河", "code":"102118"},{"name":"东双（FTTH）", "code":"102119"},{"name":"蒋屯（FTTH）", "code":"102120"},{"name":"西颜村", "code":"102121"},{"name":"潘官（FTTH）", "code":"102122"},{"name":"河头村（FTTH）", "code":"102123"},{"name":"东西村", "code":"102124"},{"name":"侯庄", "code":"102125"},{"name":"孙庄村（FTTH）", "code":"102126"},{"name":"西牛（FTTH）", "code":"102127"},{"name":"东郭村（FTTH）", "code":"102128"},{"name":"前后双村", "code":"102129"},{"name":"西郭村", "code":"102130"},{"name":"前后葛村", "code":"102131"},]},{"name":" 中心镇", "code":"102210", "sub":[{"name":"郝家沟", "code":"102211"},{"name":"石柱村", "code":"102212"},{"name":"北渐兴（FTTH）", "code":"102213"},{"name":"尚寨社区", "code":"102214"},{"name":"西付", "code":"102215"},{"name":"大牛村", "code":"102216"},{"name":"程岗村（FTTH）", "code":"102217"},{"name":"中四村", "code":"102218"},{"name":"中心花园二期", "code":"102219"},{"name":"小元村", "code":"102220"},{"name":"大元村（FTTH）", "code":"102221"},{"name":"二十里铺村", "code":"102222"},{"name":"屯头", "code":"102223"},{"name":"白马村", "code":"102224"},{"name":"老营村（FTTH）", "code":"102225"},{"name":"前屯村", "code":"102226"},{"name":"后屯村", "code":"102227"},{"name":"李官桥村", "code":"102228"},{"name":"中心镇街道", "code":"102229"},{"name":"小赵村", "code":"102230"},{"name":"前南宫村", "code":"102231"},{"name":"四府厂（FTTH）", "code":"102232"},{"name":"大东章村", "code":"102233"},{"name":"于庄村", "code":"102234"},{"name":"邹鲍路", "code":"102235"},{"name":"东章社区", "code":"102236"},{"name":"溪湖厂村", "code":"102237"},{"name":"中心花园一期", "code":"102238"},{"name":"东滩矿村", "code":"102239"},{"name":"中付", "code":"102240"},{"name":"后南宫村", "code":"102241"},{"name":"中南宫村", "code":"102242"},{"name":"双桥村", "code":"102243"},{"name":"前厂村", "code":"102244"},{"name":"东富村", "code":"102245"},{"name":"富东花园", "code":"102246"},{"name":"中心路庄", "code":"102247"},{"name":"安上村（FTTH）", "code":"102248"},{"name":"北外环路", "code":"102249"},{"name":"常家庄（FTTH）", "code":"102250"},{"name":"葛老庄社区（FTTH）", "code":"102251"},]},{"name":" 张庄镇", "code":"102310", "sub":[{"name":"东王营村（FTTH）", "code":"102311"},{"name":"仙桥（FTTH）", "code":"102312"},{"name":"老崖社区（FTTH）", "code":"102313"},{"name":"白山峪（FTTH）", "code":"102314"},{"name":"杨家庄（FTTH）", "code":"102315"},{"name":"枣沟村（FTTH）", "code":"102316"},{"name":"付庄村", "code":"102317"},{"name":"松石村（FTTH）", "code":"102318"},{"name":"张庄镇街道", "code":"102319"},{"name":"大烟庄（FTTH）", "code":"102320"},{"name":"高山庄村", "code":"102321"},{"name":"黄土村", "code":"102322"},{"name":"簸箕（FTTH）", "code":"102323"},{"name":"西卞村（FTTH）", "code":"102324"},{"name":"小烟庄", "code":"102325"},{"name":"孔沟（FTTH）", "code":"102326"},{"name":"汉石桥村", "code":"102327"},{"name":"徐岭村", "code":"102328"},{"name":"东卞村", "code":"102329"},{"name":"马连沟村", "code":"102330"},{"name":"位庄（FTTH）", "code":"102331"},{"name":"大烧峪村", "code":"102332"},{"name":"大黄林村（FTTH）", "code":"102333"},{"name":"果庄（FTTH）", "code":"102334"},{"name":"西南沟（FTTH）", "code":"102335"},{"name":"老林村", "code":"102336"},{"name":"刘家洼（FTTH）", "code":"102337"},{"name":"东北洼社区", "code":"102338"},{"name":"后任岭村", "code":"102339"},{"name":"老年公寓（FTTH）", "code":"102340"},{"name":"桑北村", "code":"102341"},{"name":"王家庄村（FTTH）", "code":"102342"},{"name":"前任岭村", "code":"102343"},{"name":"老崖老村（FTTH）", "code":"102344"},{"name":"虎沃村", "code":"102345"},{"name":"大律村（FTTH）", "code":"102346"},{"name":"东董村", "code":"102347"},{"name":"立石山村（FTTH）", "code":"102348"},{"name":"将军堂村（FTTH）", "code":"102349"},{"name":"西柳峪村（FTTH）", "code":"102350"},{"name":"锉草峪（FTTH）", "code":"102351"},]},{"name":" 太平镇", "code":"102410", "sub":[{"name":"孙坡社区", "code":"102411"},{"name":"北亢", "code":"102412"},{"name":"秦石村（FTTH）", "code":"102413"},{"name":"孙庙村", "code":"102414"},{"name":"庵上村", "code":"102415"},{"name":"前皇村", "code":"102416"},{"name":"黄庄村", "code":"102417"},{"name":"东纪沟村（FTTH）", "code":"102418"},{"name":"太二村（FTTH）", "code":"102419"},{"name":"刘庄村", "code":"102420"},{"name":"李集村", "code":"102421"},{"name":"太三村（FTTH）", "code":"102422"},{"name":"冯集村", "code":"102423"},{"name":"东里彦村", "code":"102424"},{"name":"林海村", "code":"102425"},{"name":"尹沟", "code":"102426"},{"name":"邱楼（FTTH）", "code":"102427"},{"name":"鲁太煤业太平矿家属院", "code":"102428"},{"name":"庄里村（FTTH）", "code":"102429"},{"name":"果庄村（FTTH）", "code":"102430"},{"name":"太一村（FTTH）", "code":"102431"},{"name":"夹道村", "code":"102432"},{"name":"东拐头村", "code":"102433"},{"name":"岚济路", "code":"102434"},{"name":"姚庄村（FTTH）", "code":"102435"},{"name":"刘庙村", "code":"102436"},{"name":"西拐头村", "code":"102437"},{"name":"西里村", "code":"102438"},{"name":"秦河村", "code":"102439"},{"name":"白衣堂", "code":"102440"},{"name":"骑岭村", "code":"102441"},{"name":"太平镇农贸小区", "code":"102442"},{"name":"韩石村", "code":"102443"},{"name":"高石村", "code":"102444"},{"name":"西纪沟", "code":"102445"},{"name":"谢庄（FTTH）", "code":"102446"},{"name":"太平镇街道", "code":"102447"},{"name":"刘行村", "code":"102448"},{"name":"西张村", "code":"102449"},{"name":"中行村", "code":"102450"},{"name":"幸福楼村", "code":"102451"},{"name":"南亢村", "code":"102452"},]},{"name":" 峄山镇", "code":"102510", "sub":[{"name":"刘营（FTTH）", "code":"102511"},{"name":"照山村", "code":"102512"},{"name":"中参（FTTH）", "code":"102513"},{"name":"南龙河村（FTTH）", "code":"102514"},{"name":"纪前村", "code":"102515"},{"name":"稻洼村（FTTH）", "code":"102516"},{"name":"高皇村", "code":"102517"},{"name":"峄山村", "code":"102518"},{"name":"郭参村（FTTH）", "code":"102519"},{"name":"小故村", "code":"102520"},{"name":"纪王村", "code":"102521"},{"name":"大故村（FTTH）", "code":"102522"},{"name":"大二村", "code":"102523"},{"name":"纪东村", "code":"102524"},{"name":"大一村", "code":"102525"},{"name":"刘庄（FTTH）", "code":"102526"},{"name":"上山（FTTH）", "code":"102527"},{"name":"大七庄", "code":"102528"},{"name":"蔡庄（FTTH）", "code":"102529"},{"name":"大六村", "code":"102530"},{"name":"北龙河村", "code":"102531"},{"name":"贾洼（FTTH）", "code":"102532"},{"name":"东巩村", "code":"102533"},{"name":"崔桥社区（FTTH）", "code":"102534"},{"name":"存里村（FTTH）", "code":"102535"},{"name":"大三村", "code":"102536"},{"name":"苗庄村（FTTH）", "code":"102537"},{"name":"大庄村", "code":"102538"},{"name":"大五村", "code":"102539"},{"name":"下山（FTTH）", "code":"102540"},{"name":"崔桥村（FTTH）", "code":"102541"},{"name":"金张庄", "code":"102542"},{"name":"东颜村", "code":"102543"},{"name":"西巩村", "code":"102544"},{"name":"沈家庄（FTTH）", "code":"102545"},{"name":"吕台（FTTH）", "code":"102546"},{"name":"峄山镇街道", "code":"102547"},{"name":"李庄（FTTH）", "code":"102548"},{"name":"野店村（FTTH）", "code":"102549"},{"name":"唐店村（FTTH）", "code":"102550"},{"name":"石马村（FTTH）", "code":"102551"},{"name":"黄村", "code":"102552"},]},{"name":" 凫山街道办事处", "code":"102610", "sub":[{"name":"昌平山路", "code":"102611"},{"name":"富康街", "code":"102612"},{"name":"公园路", "code":"102613"},{"name":"铁西新村", "code":"102614"},{"name":"矿建路", "code":"102615"},{"name":"西外环", "code":"102616"},{"name":"康复路", "code":"102617"},{"name":"鲍店路", "code":"102618"},{"name":"昌平路", "code":"102619"},{"name":"邹鲍路", "code":"102620"},{"name":"宏河路", "code":"102621"},{"name":"设计院路", "code":"102622"},{"name":"三兴路", "code":"102623"},{"name":"迎宾路", "code":"102624"},{"name":"营西路", "code":"102625"},{"name":"凫山路", "code":"102626"},{"name":"择邻路", "code":"102627"},{"name":"建设路", "code":"102628"},]},{"name":" 千泉街道办事处", "code":"102710", "sub":[{"name":"亚圣路", "code":"102711"},{"name":"唐王山路", "code":"102712"},{"name":"圣都北街", "code":"102713"},{"name":"顺河路", "code":"102714"},{"name":"韦贤路", "code":"102715"},{"name":"过街棚", "code":"102716"},{"name":"裕民路", "code":"102717"},{"name":"岗山南路", "code":"102718"},{"name":"北门里大街", "code":"102719"},{"name":"丰田路", "code":"102720"},{"name":"圣都西街", "code":"102721"},{"name":"名泉路", "code":"102722"},{"name":"城前西路", "code":"102723"},{"name":"匡衡路", "code":"102724"},{"name":"城前东路", "code":"102725"},{"name":"东门里大街", "code":"102726"},{"name":"仰圣路", "code":"102727"},{"name":"西门里大街", "code":"102728"},{"name":"南坛街", "code":"102729"},{"name":"四基山路", "code":"102730"},{"name":"富康街", "code":"102731"},{"name":"东丽花园", "code":"102732"},{"name":"长青路", "code":"102733"},{"name":"花园街", "code":"102734"},{"name":"峄山路", "code":"102735"},{"name":"西关大街", "code":"102736"},{"name":"岚济路", "code":"102737"},]},{"name":" 城前镇", "code":"102810", "sub":[{"name":"城泰路", "code":"102811"},{"name":"东南河（FTTH）", "code":"102812"},{"name":"土门村（FTTH）", "code":"102813"},{"name":"土山沟社区", "code":"102814"},{"name":"祝沟（FTTH）", "code":"102815"},{"name":"西南河（FTTH）", "code":"102816"},{"name":"河北尹庄（FTTH）", "code":"102817"},{"name":"和兴花园", "code":"102818"},{"name":"城兴花园社区", "code":"102819"},{"name":"东岭", "code":"102820"},{"name":"史泉（FTTH）", "code":"102821"},{"name":"张园村", "code":"102822"},{"name":"上石河村（FTTH）", "code":"102823"},{"name":"小崇", "code":"102824"},{"name":"北山沃村", "code":"102825"},{"name":"刘庄村（FTTH）", "code":"102826"},{"name":"许老村（FTTH）", "code":"102827"},{"name":"青邑村（FTTH）", "code":"102828"},{"name":"韩庄村", "code":"102829"},{"name":"东圈里村（FTTH）", "code":"102830"},{"name":"南沃村", "code":"102831"},{"name":"城后社区", "code":"102832"},{"name":"东西康王（FTTH）", "code":"102833"},{"name":"魏兰村", "code":"102834"},{"name":"岳庄村", "code":"102835"},{"name":"榆官村", "code":"102836"},{"name":"城前小区（FTTH）", "code":"102837"},{"name":"兰陵古城一条街", "code":"102838"},{"name":"前标村（FTTH）", "code":"102839"},{"name":"躲水村（FTTH）", "code":"102840"},{"name":"郑庄村", "code":"102841"},{"name":"云罗村（FTTH）", "code":"102842"},{"name":"洼陡村（FTTH）", "code":"102843"},{"name":"水泊村", "code":"102844"},{"name":"玉皇庙", "code":"102845"},{"name":"三河口村（FTTH）", "code":"102846"},{"name":"白龙庄村", "code":"102847"},{"name":"东山", "code":"102848"},{"name":"瓦屋（FTTH）", "code":"102849"},{"name":"南王村", "code":"102850"},{"name":"土山沟社区二期", "code":"102851"},{"name":"北王村", "code":"102852"},{"name":"河南村", "code":"102853"},{"name":"雨山（FTTH）", "code":"102854"},{"name":"大小柳峪村（FTTH）", "code":"102855"},{"name":"赵林村（FTTH）", "code":"102856"},{"name":"杨峪村", "code":"102857"},{"name":"刘庄社区（FTTH）", "code":"102858"},{"name":"马河（FTTH）", "code":"102859"},{"name":"大小岔河（FTTH）", "code":"102860"},{"name":"魏沃村（FTTH）", "code":"102861"},{"name":"石门风景区", "code":"102862"},{"name":"城前镇街道", "code":"102863"},{"name":"高庄村", "code":"102864"},{"name":"大崇", "code":"102865"},{"name":"尚河", "code":"102866"},{"name":"孙厂", "code":"102867"},{"name":"云头山村", "code":"102868"},{"name":"牛庄（FTTH）", "code":"102869"},{"name":"前祝沟村", "code":"102870"},{"name":"单庄（FTTH）", "code":"102871"},]},]}
 

];
}($);
// jshint ignore: end

/* global $:true */
/* jshint unused:false*/

+ function($) {
  "use strict";

  var defaults;
  var raw = $.rawCitiesData;

  var format = function(data) {
    var result = [];
    for(var i=0;i<data.length;i++) {
      var d = data[i];
      if(/^请选择|市辖区/.test(d.name)) continue;
      result.push(d);
    }
    if(result.length) return result;
    return [];
  };

  var sub = function(data) {
    if(!data.sub) return [{ name: '', code: data.code }];  // 有可能某些县级市没有区
    return format(data.sub);
  };

  var getCities = function(d) {
    for(var i=0;i< raw.length;i++) {
      if(raw[i].code === d || raw[i].name === d) return sub(raw[i]);
    }
    return [];
  };

  var getDistricts = function(p, c) {
    for(var i=0;i< raw.length;i++) {
      if(raw[i].code === p || raw[i].name === p) {
        for(var j=0;j< raw[i].sub.length;j++) {
          if(raw[i].sub[j].code === c || raw[i].sub[j].name === c) {
            return sub(raw[i].sub[j]);
          }
        }
      }
    }
  };

  var parseInitValue = function (val) {
    var p = raw[0], c, d;
    var tokens = val.split(' ');
    raw.map(function (t) {
      if (t.name === tokens[0]) p = t;
    });

    p.sub.map(function (t) {
      if (t.name === tokens[1]) c = t;
    })

    if (tokens[2]) {
      console.log(tokens[2]);
      c.sub.map(function (t) {
        if (t.name === tokens[2]) d = t;
      })
    }

    if (d) return [p.code, c.code, d.code];
    return [p.code, c.code];
  }

  $.fn.cityPicker = function(params) {
    params = $.extend({}, defaults, params);
    return this.each(function() {
      var self = this;
      
      var provincesName = raw.map(function(d) {
        return d.name;
      });
      var provincesCode = raw.map(function(d) {
        return d.code;
      });
      var initCities = sub(raw[0]);
      var initCitiesName = initCities.map(function (c) {
        return c.name;
      });
      var initCitiesCode = initCities.map(function (c) {
        return c.code;
      });
      var initDistricts = sub(raw[0].sub[0]);

      var initDistrictsName = initDistricts.map(function (c) {
        return c.name;
      });
      var initDistrictsCode = initDistricts.map(function (c) {
        return c.code;
      });

      var currentProvince = provincesName[0];
      var currentCity = initCitiesName[0];
      var currentDistrict = initDistrictsName[0];

      var cols = [
          {
            displayValues: provincesName,
            values: provincesCode,
            cssClass: "col-province"
          },
          {
            displayValues: initCitiesName,
            values: initCitiesCode,
            cssClass: "col-city"
          }
        ];

        if(params.showDistrict) cols.push({
          values: initDistrictsCode,
          displayValues: initDistrictsName,
          cssClass: "col-district"
        });

      var config = {

        cssClass: "city-picker",
        rotateEffect: false,  //为了性能
        formatValue: function (p, values, displayValues) {
          return displayValues.join(' ');
        },
        onChange: function (picker, values, displayValues) {
          var newProvince = picker.cols[0].displayValue;
          var newCity;
          if(newProvince !== currentProvince) {
            var newCities = getCities(newProvince);
            newCity = newCities[0].name;
            var newDistricts = getDistricts(newProvince, newCity);
            picker.cols[1].replaceValues(newCities.map(function (c) {
              return c.code;
            }), newCities.map(function (c) {
              return c.name;
            }));
            if(params.showDistrict) picker.cols[2].replaceValues(newDistricts.map(function (d) {
              return d.code;
            }), newDistricts.map(function (d) {
              return d.name;
            }));
            currentProvince = newProvince;
            currentCity = newCity;
            picker.updateValue();
            return false; // 因为数据未更新完，所以这里不进行后序的值的处理
          } else {
            if(params.showDistrict) {
              newCity = picker.cols[1].displayValue;
              if(newCity !== currentCity) {
                var districts = getDistricts(newProvince, newCity);
                picker.cols[2].replaceValues(districts.map(function (d) {
                  return d.code;
                }), districts.map(function (d) {
                  return d.name;
                }));
                currentCity = newCity;
                picker.updateValue();
                return false; // 因为数据未更新完，所以这里不进行后序的值的处理
              }
            }
          }
          $(self).attr('data-code', values[values.length-1]);
          $(self).attr('data-codes', values.join(','));
          if (params.onChange) {
            params.onChange.call(self, picker, values, displayValues);
          }
        },

        cols: cols
      };

      if(!this) return;
      var p = $.extend({}, params, config);
      //计算value
      var val = $(this).val();
      if (!val) val = '高新区 高新区1 高新区11';
      currentProvince = val.split(" ")[0];
      currentCity = val.split(" ")[1];
      currentDistrict= val.split(" ")[2];
      if(val) {
        p.value = parseInitValue(val);
        if(p.value[0]) {
          var cities = getCities(p.value[0]);
          p.cols[1].values = cities.map(function (c) {
            return c.code;
          });
          p.cols[1].displayValues = cities.map(function (c) {
            return c.name;
          });
        }

        if(p.value[1]) {
          if (params.showDistrict) {
            var dis = getDistricts(p.value[0], p.value[1]);
            p.cols[2].values = dis.map(function (d) {
              return d.code;
            });
            p.cols[2].displayValues = dis.map(function (d) {
              return d.name;
            });
          }
        } else {
          if (params.showDistrict) {
            var dis = getDistricts(p.value[0], p.cols[1].values[0]);
            p.cols[2].values = dis.map(function (d) {
              return d.code;
            });
            p.cols[2].displayValues = dis.map(function (d) {
              return d.name;
            });
          }
        }
      }
      $(this).picker(p);
    });
  };

  defaults = $.fn.cityPicker.prototype.defaults = {
    showDistrict: true //是否显示地区选择
  };

}($);
