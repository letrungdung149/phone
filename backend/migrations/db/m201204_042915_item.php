<?php

use yii\db\Schema;
use yii\db\Migration;

class m201204_042915_item extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable(
            '{{%item}}',
            [
                'id'=> Schema::TYPE_PK.'',
                'product_id'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'sale'=> Schema::TYPE_INTEGER.'(11) NOT NULL DEFAULT "0"',
                'product_type'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                ],
            $tableOptions
        );

        $this->createIndex('product_type', '{{%item}}','product_type',0);    $this->insert('{{%item}}',['id'=>'13','product_id'=>'1737','sale'=>'10','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'14','product_id'=>'1738','sale'=>'5','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'15','product_id'=>'1739','sale'=>'6','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'16','product_id'=>'1740','sale'=>'6','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'17','product_id'=>'1741','sale'=>'5','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'18','product_id'=>'1742','sale'=>'5','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'19','product_id'=>'1743','sale'=>'5','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'20','product_id'=>'1744','sale'=>'5','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'21','product_id'=>'1745','sale'=>'5','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'22','product_id'=>'1746','sale'=>'5','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'23','product_id'=>'1747','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'24','product_id'=>'1748','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'25','product_id'=>'1749','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'26','product_id'=>'1750','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'27','product_id'=>'1751','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'28','product_id'=>'1752','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'29','product_id'=>'1753','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'30','product_id'=>'1754','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'31','product_id'=>'1755','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'32','product_id'=>'1756','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'33','product_id'=>'1757','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'34','product_id'=>'1758','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'35','product_id'=>'1759','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'36','product_id'=>'1760','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'37','product_id'=>'1761','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'38','product_id'=>'1762','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'39','product_id'=>'1763','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'40','product_id'=>'1764','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'41','product_id'=>'1765','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'42','product_id'=>'1766','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'43','product_id'=>'1767','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'44','product_id'=>'1768','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'45','product_id'=>'1769','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'46','product_id'=>'1770','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'47','product_id'=>'1771','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'48','product_id'=>'1772','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'49','product_id'=>'1773','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'50','product_id'=>'1774','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'51','product_id'=>'1775','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'52','product_id'=>'1776','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'53','product_id'=>'1777','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'54','product_id'=>'1778','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'55','product_id'=>'1779','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'56','product_id'=>'1780','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'57','product_id'=>'1781','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'58','product_id'=>'1782','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'59','product_id'=>'1783','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'60','product_id'=>'1784','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'61','product_id'=>'1785','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'62','product_id'=>'1786','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'63','product_id'=>'1787','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'64','product_id'=>'1788','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'65','product_id'=>'1789','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'66','product_id'=>'1790','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'67','product_id'=>'1791','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'68','product_id'=>'1792','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'69','product_id'=>'1793','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'70','product_id'=>'1794','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'71','product_id'=>'1795','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'72','product_id'=>'1796','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'73','product_id'=>'1797','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'74','product_id'=>'1798','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'75','product_id'=>'1799','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'76','product_id'=>'1800','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'77','product_id'=>'1801','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'78','product_id'=>'1802','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'79','product_id'=>'1803','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'80','product_id'=>'1804','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'81','product_id'=>'1805','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'82','product_id'=>'1806','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'83','product_id'=>'1807','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'84','product_id'=>'1808','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'85','product_id'=>'1809','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'86','product_id'=>'1810','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'87','product_id'=>'1811','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'88','product_id'=>'1812','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'89','product_id'=>'1813','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'90','product_id'=>'1814','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'91','product_id'=>'1815','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'92','product_id'=>'1816','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'93','product_id'=>'1817','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'94','product_id'=>'1818','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'95','product_id'=>'1819','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'96','product_id'=>'1820','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'97','product_id'=>'1821','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'98','product_id'=>'1822','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'99','product_id'=>'1823','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'100','product_id'=>'1824','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'101','product_id'=>'1825','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'102','product_id'=>'1826','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'103','product_id'=>'1827','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'104','product_id'=>'1828','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'105','product_id'=>'1829','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'106','product_id'=>'1830','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'107','product_id'=>'1831','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'108','product_id'=>'1832','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'109','product_id'=>'1833','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'110','product_id'=>'1834','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'111','product_id'=>'1835','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'112','product_id'=>'1836','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'113','product_id'=>'1837','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'114','product_id'=>'1838','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'115','product_id'=>'1839','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'116','product_id'=>'1840','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'117','product_id'=>'1841','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'118','product_id'=>'1842','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'119','product_id'=>'1843','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'120','product_id'=>'1844','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'121','product_id'=>'1845','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'122','product_id'=>'1846','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'123','product_id'=>'1847','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'124','product_id'=>'1848','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'125','product_id'=>'1849','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'126','product_id'=>'1850','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'127','product_id'=>'1851','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'128','product_id'=>'1852','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'129','product_id'=>'1853','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'130','product_id'=>'1854','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'131','product_id'=>'1855','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'132','product_id'=>'1856','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'133','product_id'=>'1857','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'134','product_id'=>'1858','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'135','product_id'=>'1859','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'136','product_id'=>'1860','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'137','product_id'=>'1861','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'138','product_id'=>'1862','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'139','product_id'=>'1863','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'140','product_id'=>'1864','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'141','product_id'=>'1865','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'142','product_id'=>'1866','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'143','product_id'=>'1867','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'144','product_id'=>'1868','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'145','product_id'=>'1869','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'146','product_id'=>'1870','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'147','product_id'=>'1871','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'148','product_id'=>'1872','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'149','product_id'=>'1873','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'150','product_id'=>'1874','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'151','product_id'=>'1875','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'152','product_id'=>'1876','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'153','product_id'=>'1877','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'154','product_id'=>'1878','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'155','product_id'=>'1879','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'156','product_id'=>'1880','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'157','product_id'=>'1881','sale'=>'0','product_type'=>'0']);
$this->insert('{{%item}}',['id'=>'158','product_id'=>'4619','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'159','product_id'=>'4620','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'160','product_id'=>'4621','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'161','product_id'=>'4622','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'162','product_id'=>'4623','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'163','product_id'=>'4624','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'164','product_id'=>'4625','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'165','product_id'=>'4626','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'166','product_id'=>'4627','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'167','product_id'=>'4628','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'168','product_id'=>'4629','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'169','product_id'=>'4630','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'170','product_id'=>'4631','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'171','product_id'=>'4632','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'172','product_id'=>'4633','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'173','product_id'=>'4634','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'174','product_id'=>'4635','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'175','product_id'=>'4636','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'176','product_id'=>'4637','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'177','product_id'=>'4638','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'178','product_id'=>'4639','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'179','product_id'=>'4640','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'180','product_id'=>'4641','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'181','product_id'=>'4642','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'182','product_id'=>'4643','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'183','product_id'=>'4644','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'184','product_id'=>'4645','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'185','product_id'=>'4646','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'186','product_id'=>'4647','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'187','product_id'=>'4648','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'188','product_id'=>'4649','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'189','product_id'=>'4650','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'190','product_id'=>'4651','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'191','product_id'=>'4652','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'192','product_id'=>'4653','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'193','product_id'=>'4654','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'194','product_id'=>'4655','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'195','product_id'=>'4656','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'196','product_id'=>'4657','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'197','product_id'=>'4658','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'198','product_id'=>'4659','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'199','product_id'=>'4660','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'200','product_id'=>'4661','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'201','product_id'=>'4662','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'202','product_id'=>'4663','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'203','product_id'=>'4664','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'204','product_id'=>'4665','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'205','product_id'=>'4666','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'206','product_id'=>'4667','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'207','product_id'=>'4668','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'208','product_id'=>'4669','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'209','product_id'=>'4670','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'210','product_id'=>'4671','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'211','product_id'=>'4672','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'212','product_id'=>'4673','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'213','product_id'=>'4674','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'214','product_id'=>'4675','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'215','product_id'=>'4676','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'216','product_id'=>'4677','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'217','product_id'=>'4678','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'218','product_id'=>'4679','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'219','product_id'=>'4680','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'220','product_id'=>'4681','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'221','product_id'=>'4682','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'222','product_id'=>'4683','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'223','product_id'=>'4684','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'224','product_id'=>'4685','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'225','product_id'=>'4686','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'226','product_id'=>'4687','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'227','product_id'=>'4688','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'228','product_id'=>'4689','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'229','product_id'=>'4690','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'230','product_id'=>'4691','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'231','product_id'=>'4692','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'232','product_id'=>'4693','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'233','product_id'=>'4694','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'234','product_id'=>'4695','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'235','product_id'=>'4696','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'236','product_id'=>'4697','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'237','product_id'=>'4698','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'238','product_id'=>'4699','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'239','product_id'=>'4700','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'240','product_id'=>'4701','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'241','product_id'=>'4702','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'242','product_id'=>'4703','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'243','product_id'=>'4704','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'244','product_id'=>'4705','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'245','product_id'=>'4706','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'246','product_id'=>'4707','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'247','product_id'=>'4708','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'248','product_id'=>'4709','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'249','product_id'=>'4710','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'250','product_id'=>'4711','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'251','product_id'=>'4712','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'252','product_id'=>'4713','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'253','product_id'=>'4714','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'254','product_id'=>'4715','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'255','product_id'=>'4716','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'256','product_id'=>'4717','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'257','product_id'=>'4718','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'258','product_id'=>'4719','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'259','product_id'=>'4720','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'260','product_id'=>'4721','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'261','product_id'=>'4722','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'262','product_id'=>'4723','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'263','product_id'=>'4724','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'264','product_id'=>'4725','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'265','product_id'=>'4726','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'266','product_id'=>'4727','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'267','product_id'=>'4728','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'268','product_id'=>'4729','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'269','product_id'=>'4730','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'270','product_id'=>'4731','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'271','product_id'=>'4732','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'272','product_id'=>'4733','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'273','product_id'=>'4734','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'274','product_id'=>'4735','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'275','product_id'=>'4736','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'276','product_id'=>'4737','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'277','product_id'=>'4738','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'278','product_id'=>'4739','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'279','product_id'=>'4740','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'280','product_id'=>'4741','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'281','product_id'=>'4742','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'282','product_id'=>'4743','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'283','product_id'=>'4744','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'284','product_id'=>'4745','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'285','product_id'=>'4746','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'286','product_id'=>'4747','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'287','product_id'=>'4748','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'288','product_id'=>'4749','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'289','product_id'=>'4750','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'290','product_id'=>'4751','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'291','product_id'=>'4752','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'292','product_id'=>'4753','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'293','product_id'=>'4754','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'294','product_id'=>'4755','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'295','product_id'=>'4756','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'296','product_id'=>'4757','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'297','product_id'=>'4758','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'298','product_id'=>'4759','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'299','product_id'=>'4760','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'300','product_id'=>'4761','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'301','product_id'=>'4762','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'302','product_id'=>'4763','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'303','product_id'=>'4764','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'304','product_id'=>'4765','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'305','product_id'=>'4766','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'306','product_id'=>'4767','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'307','product_id'=>'4768','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'308','product_id'=>'4769','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'309','product_id'=>'4770','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'310','product_id'=>'4771','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'311','product_id'=>'4772','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'312','product_id'=>'4773','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'313','product_id'=>'4774','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'314','product_id'=>'4775','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'315','product_id'=>'4776','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'316','product_id'=>'4777','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'317','product_id'=>'4778','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'318','product_id'=>'4779','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'319','product_id'=>'4780','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'320','product_id'=>'4781','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'321','product_id'=>'4782','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'322','product_id'=>'4783','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'323','product_id'=>'4784','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'324','product_id'=>'4785','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'325','product_id'=>'4786','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'326','product_id'=>'4787','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'327','product_id'=>'4788','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'328','product_id'=>'4789','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'329','product_id'=>'4790','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'330','product_id'=>'4791','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'331','product_id'=>'4792','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'332','product_id'=>'4793','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'333','product_id'=>'4794','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'334','product_id'=>'4795','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'335','product_id'=>'4796','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'336','product_id'=>'4797','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'337','product_id'=>'4798','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'338','product_id'=>'4799','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'339','product_id'=>'4800','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'340','product_id'=>'4801','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'341','product_id'=>'4802','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'342','product_id'=>'4803','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'343','product_id'=>'4804','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'344','product_id'=>'4805','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'345','product_id'=>'4806','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'346','product_id'=>'4807','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'347','product_id'=>'4808','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'348','product_id'=>'4809','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'349','product_id'=>'4810','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'350','product_id'=>'4811','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'351','product_id'=>'4812','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'352','product_id'=>'4813','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'353','product_id'=>'4814','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'354','product_id'=>'4815','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'355','product_id'=>'4816','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'356','product_id'=>'4817','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'357','product_id'=>'4818','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'358','product_id'=>'4819','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'359','product_id'=>'4820','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'360','product_id'=>'4821','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'361','product_id'=>'4822','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'362','product_id'=>'4823','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'363','product_id'=>'4824','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'364','product_id'=>'4825','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'365','product_id'=>'4826','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'366','product_id'=>'4827','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'367','product_id'=>'4828','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'368','product_id'=>'4829','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'369','product_id'=>'4830','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'370','product_id'=>'4831','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'371','product_id'=>'4832','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'372','product_id'=>'4833','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'373','product_id'=>'4834','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'374','product_id'=>'4835','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'375','product_id'=>'4836','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'376','product_id'=>'4837','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'377','product_id'=>'4838','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'378','product_id'=>'4839','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'379','product_id'=>'4840','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'380','product_id'=>'4841','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'381','product_id'=>'4842','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'382','product_id'=>'4843','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'383','product_id'=>'4844','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'384','product_id'=>'4845','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'385','product_id'=>'4846','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'386','product_id'=>'4847','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'387','product_id'=>'4848','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'388','product_id'=>'4849','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'389','product_id'=>'4850','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'390','product_id'=>'4851','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'391','product_id'=>'4852','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'392','product_id'=>'4853','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'393','product_id'=>'4854','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'394','product_id'=>'4855','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'395','product_id'=>'4856','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'396','product_id'=>'4857','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'397','product_id'=>'4858','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'398','product_id'=>'4859','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'399','product_id'=>'4860','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'400','product_id'=>'4861','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'401','product_id'=>'4862','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'402','product_id'=>'4863','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'403','product_id'=>'4864','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'404','product_id'=>'4865','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'405','product_id'=>'4866','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'406','product_id'=>'4867','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'407','product_id'=>'4868','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'408','product_id'=>'4869','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'409','product_id'=>'4870','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'410','product_id'=>'4871','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'411','product_id'=>'4872','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'412','product_id'=>'4873','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'413','product_id'=>'4874','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'414','product_id'=>'4875','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'415','product_id'=>'4876','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'416','product_id'=>'4877','sale'=>'0','product_type'=>'1']);
$this->insert('{{%item}}',['id'=>'417','product_id'=>'4878','sale'=>'0','product_type'=>'1']);

    }

    public function safeDown()
    {
        $this->dropIndex('product_type', '{{%item}}');
        $this->dropTable('{{%item}}');
    }
}