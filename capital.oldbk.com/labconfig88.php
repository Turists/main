<?
//��������� ��� ����� 
$MAXFOTO=28;

//��������� ����� ������� ������ 0 - ������� 10
// mob id - kol

$mob[0]= array(
		"97" => 1);

$mob[1]= array(
		"90" => 1);

$mob[2]= array(
		"90" => 2);


$mob[3]= array(
		"90" => 3);

$mob[4]= array(
		"91" => 1,
		"90" => 2);

$mob[5]= array(
		"91" => 2);

$mob[6]= array(
		"91" => 1,
		"95" => 1);

$mob[7]= array(
		"95" => 2);

$mob[8]= array(
		"91" => 1,
		"90" => 1,
		"95" => 1);

$mob[9]= array(
		"96" => 5);

$mob[10]= array(
		"96" => 2,
		"97" => 3);

$mob[11]= array(
		"100" => 4,
		"97" => 3);

$mob[12]= array(
		"97" => 3,
		"98" => 3);

$mob[13]= array(
		"91" => 3,
		"99" => 3);

$mob[14]= array(
		"99" => 2,
		"98" => 1,
		"90" => 1,
		"97" => 2);

$mob[15]= array(
		"92" => 2,
		"100" => 2,
		"90" => 2);

$mob[16]= array(
		"92" => 2,
		"99" => 2,
		"100" => 3);

$mob[17]= array(
		"100" => 3,
		"99" => 1,
		"93" => 2);

$mob[18]= array(

		"100" => 2,
		"99" => 1,
		"93" => 3);
	
$mob[19]= array(
		"96" => 4,
		"100" => 2,
		"99" => 1,
		"94" => 1);

$mob[20]= array(
		"98" => 2,
		"100" => 2,
		"93" => 2,
		"94" => 2);


/////////////////////////////////////////////////	
// ��������� ����� �� �����
// $mdrop[id-����] =  "���� %" => ���� �� �� ����
// ��� ����� � ���� ����������� � ����!
//4000 - �������
//3001 -������
//3002 - �����
//3003 - �����
//3004 - ����
//3005 - ����
//3006- ������ ������
//3007 - ����� ���������� �������
//3008 -������� ������ 
//3009 -������
//3010 -�������
//3011 -�������
//3012 - �����
$mdrop[90]=array(
		"3003" => 30,  //����� 
		"3002" => 10, //������
		"3001" => 15, // ������
		"3004" => 20, 
		"3005" => 30, 
		"3006" => 5, //��� ���
		"4000" => 20, //�������
		"0" => 60 // �����
		); 

$mdrop[91]=array(
		"3007" => 40, // +
		"3004" => 20, //+
		"3006" => 10, //+
		"3008" => 10, //+
		"4000" => 5, //�������
		"0" => 60 //60% �����
		); 		

$mdrop[92]=array(
		"3005" => 10,  //����
		"3004" => 10, //����
		"4000" => 5, //�������
		"3003" => 2,  //������
		"3011" => 2,  //�����
		"0" => 25 //15 ������
		); 

//������ ���� ����� ��������
$mdrop[93]=array(
		"3001" => 10,  //+
		"3002" => 10,  //+
		"3003" => 40,  //+
		"3004" => 10, //����+
		"3005" => 10, //����+
		"3006" => 10, //��� ���+
		"3007" => 40,  //+
		"3008" => 10,  //+
		"3009" => 10,  //������
		"3011" => 10,  //�����
		"3010" => 10, //��������
		"3012" => 10, //�����
		"4001" => 10, //�������
		"0" => 25 // �����
		);

//������ ���� ����� ��������
$mdrop[94]=array(
		"3003" => 20,  //�����
		"3011" => 20,  //�����
		"3010" => 10, //��������
		"3012" => 15, //�����
		"3004" => 20, //����+
		"3005" => 20, //����+
		"3006" => 5, //��� ���+
		"4001" => 10, //�������
		"0" => 25 // �����
		);

$mdrop[95]=array(
		"3008" => 10,  //����� 
		"3002" => 10, //������
		"3001" => 15, // ������
		"3004" => 20, //����
		"3005" => 20, //����
		"3007" => 30, //����
		"3012" => 5, //�����
		"3006" => 5, //��� ���
		"4000" => 5, //�������
		"0" => 25 // �����
		);


$mdrop[96]=array(
		"3004" => 15, //����+
		"3005" => 15, //����+
		"3008" => 15,  //����� 
		"3002" => 15, //������
		"3003" => 2,  //�����111
		"3011" => 2,  //�����
		"0" => 25 // �����
		);


$mdrop[97]=array(
		"3004" => 20, //����+
		"3005" => 20, //����+
		"3008" => 20,  //����� 
		"3002" => 20, //������
		"0" => 20 // �����
		);

$mdrop[98]=array(
		"3003" => 20,  //���������
		"3011" => 10,  //�����
		"3004" => 10, //����+
		"3004" => 10, //����+
		"3008" => 10,  //����� 
		"3002" => 10, //������
		"0" => 20 // �����
		);

$mdrop[99]=array(
		"3003" => 10,  //�������
		"3011" => 10,  //�����
		"3010" => 10, //��������
		"3012" => 15, //�����
		"0" => 20 // �����
		);

$mdrop[100]=array(
		"3009" => 5,  //������
		"3011" => 10,  //�����
		"3005" => 10, //����
		"3002" => 15, //�����
		"3006" => 10, //��� ���+
		"0" => 20 // �����
		);


		

/////////////////////////////////////////////////	
//��������� �������  ������� 0 - ������� - 10
// ���� ���� � ����������  � �����
$lov[0]=array(
// magic - time min
		"timer_trap" => "2" // ���� �� 2 ���
		);

$lov[1]=array(
// magic - time min
		"poison_trap" => "2" // �� �� 2 ���
		);

$lov[2]=array(
// magic - time min
		"timer_trap" => "4" //���� �� 4 ���
		);

$lov[3]=array(
// magic - time min
		"poison_trap" => "4" // �� �� 4 ���
		);


$lov[4]=array(
// magic - time min
		"timer_trap" => "8" //���� �� 8 ���
		);

$lov[5]=array(
// magic - time min
		"poison_trap" => "8" // �� �� 8 ���
		);

$lov[6]=array(
// magic - time min
		"timer_trap" => "9" //���� �� 9 ���
		);

$lov[7]=array(
// magic - time min
		"poison_trap" => "9" // �� �� 9 ���
		);
///////////////////////////////////////////////
//��������� �����
// ���� ���� � ����������  � �����
$hils[0]=array(
		"H" => 10 // 10%
		);

$hils[1]=array(
		"H" => 20 // 20%
		);

$hils[2]=array(
		"H" => 30 // 30%
		);

$hils[4]=array(
		"H" => 40 // 40%
		);

$hils[5]=array(
		"H" => 50 // 50%
		);

$hils[6]=array(
		"H" => 50 // 50%
		);

$hils[6]=array(
		"H" => 60 // 60%
		);

$hils[7]=array(
		"H" => 75 // 75%
		);

$hils[8]=array(
		"H" => 80 // 80%
		);

$hils[9]=array(
		"H" => 90 // 90%
		);

$hils[10]=array(
		"H" => 99 // 99%
		);

/////////////////////////////////////////////////
// ��������� BOX-��
//��� ��� � �������� ����� �������� �� ����
//����� ���������� ������� � ������!

$pbox[0]=array(
///�������� ��� ������� �� ������, �.�. ����� ���������� �� ���� ���� � ���������, �� ��������� ��
		"gold" => 3003
		);
$pbox[1]=array(
		"granit" => 3001 //��������� ��� - � ���������� �� �� ���������
		); 
$pbox[2]=array(
		"timer_trap" => "16" 
		);
$pbox[3]=array(
		"glina" => 3003 // ��������� ��� - � ���������� �� �� ���������
		); 
$pbox[4]=array(
		"gold" => 3009
		);
$pbox[5]=array(
		"silver" => 3011,
		"granit" => 3001 
		);
$pbox[6]=array(
		"vostanovlenie_HP" => 100
		);
$pbox[7]=array(
		"timer_trap" => "15" //���� �� 8 ���		
		);
$pbox[8]=array(
		"items" => 3010, 
		"antidot" => 4000
		);
$pbox[9]=array(
		"items" => 3002 // ��������� ��� - � ���������� �� �� ���������
	      ); 
$pbox[10]=array(
		"buter" => 105, 
		"gold" => 3003 
		);
$pbox[11]=array(
		"poison_trap" => "8" // �� �� 8 ���
		);

$pbox[12]=array(
		"almaz" => 3012
		);
$pbox[13]=array(
		"timer_trap" => "18" //���� �� 8 ���
		);
$pbox[14]=array(
		"gold" => 3009
		);
$pbox[15]=array(
		"silver" => 3011,
		"antidot" => 4000
		);
$pbox[16]=array(
		"vostanovlenie_HP" => 100
		);
$pbox[17]=array(
		"timer_trap" => "15" //���� �� 8 ���		
		);
$pbox[18]=array(
		"items" => 3012, 
		"antidot" => 4000
		);
$pbox[19]=array(
		"granit" => 3001, 
		"gold" => 3009 
		);
$pbox[20]=array(
		"gold" => 3009,
		"items" => 3012
		);



/////////////////////////////////////////////////
	
//��������� ����� �� �������� ������� 0 - ����� - 10
// labonly - ���������� ������ �� ����

$sund[0]=array(
//������ 1 ���� � ����������� � ������ - ��������� ��������� �������� �� ���������������� ��������
		 "shop" => "eshop",
		 "labonly" => "1",
		 "maxdur" => "5",
		 "present"=> "��������",
		 "id" => "3"
			);
$sund[2]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3001"
			);

$sund[3]=array(
		 "shop" => "eshop",
		 "labonly" => "1",
		 "maxdur" => "2",
 		 "present"=> "��������",
		 "id" => "5202"
			);


$sund[4]=array(
		 "shop" => "eshop",
		 "labonly" => "1",
		 "maxdur" => "1",
		 "present"=> "��������",
		 "id" => "105"
			);

$sund[5]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3001"
			);


$sund[6]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
		 "present"=> "",
		 "id" => "200"
			);


$sund[7]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
		 "present"=> "",
		 "id" => "210"
			);


$sund[8]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
		 "present"=> "",
		 "id" => "209"
			);


$sund[9]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "",
		 "id" => "4000"
			);

$sund[10]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3010"
			);

$sund[11]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
		 "present"=> "",
		 "id" => "206"
			);


$sund[12]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3012"
			);

$sund[13]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3011"
			);

$sund[14]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
 		 "present"=> "",
		 "id" => "204"
			);


$sund[15]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
 		 "present"=> "",
		 "id" => "201"
			);
			
$sund[16]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3012"
			);


$sund[17]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
 		 "present"=> "",
		 "id" => "198"
			);
$sund[18]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3009"
			);

$sund[19]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3010"
			);

$sund[20]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3011"
			);
			
////��������� ��� ���������� �����
// [id] - ����� � ����� ��������
/// ���� ����� � ������� ��� �� ��������������
$reitem[200]=1;
$reitem[210]=1;
$reitem[209]=1;
$reitem[206]=1;
$reitem[204]=1;
$reitem[201]=3; //������
$reitem[198]=1;


?>