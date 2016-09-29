<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Öğrenci Yurt Otomasyonu</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/dataTables.bootstrap.css" />
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/ogrenciyurtotomasyonu">OYS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Öğrenci Bilgileri <span class="sr-only">(current)</span></a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Veli-Okul Bilgileri</a></li>
        <li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Ödeme Planı</a></li>
        <li><a href="#notlar" aria-controls="notlar" role="tab" data-toggle="tab">Notlar</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Kaydet</a></li>
        <li><a href="#">Sil</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div>
  <!-- Tab panes -->
  <div class="tab-content">
  	<!-- Öğrenci Bilgileri Başlangıç -->
    <div role="tabpanel" class="tab-pane active" id="home">
    	<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<label for="ogrname"><input type="radio" name="ogrust" id="ogrname">  Öğrenci</label>
					<label for="gecicibarinma"><input type="radio" name="ogrust" id="gecicibarinma">  Geçici Barınma </label>
					<label for="misafir"><input type="radio" name="ogrust" id="misafir">  Misafir </label>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
					<ul class="list-group">
						<li class="list-group-item"><img src="img/yakup_400x400.jpg" alt="yakup" class="img-responsive"></li>
						<li class="list-group-item text-center"><b>No:404</b></li>
					</ul>
					<ul class="list-group" id="butonlar">
						<li class="list-group-item"><a href="#" class="btn btn-success">Odayı Boşalt</a></li>
						<li class="list-group-item"><a href="#" class="btn btn-danger">İlişiği Kes</a></li>
						<li class="list-group-item"><a href="#" class="btn btn-warning">Dönem Değiştir</a></li>
						<li class="list-group-item"><a href="#" class="btn btn-primary">Mezun Et</a></li>
					</ul>
					<ul class="list-group">
						<li class="list-group-item"><label for="ncuzdanfok"><input type="checkbox" name="ncuzdanfok" id="ncuzdanfok"/>  N. Cüzdanı Fot.</label></li>
						<li class="list-group-item"><label for="ikametgah"><input type="checkbox" name="ikametgah" id="ikametgah"/>  İkametgah</label></li>
						<li class="list-group-item"><label for="fotograf"><input type="checkbox" name="fotograf" id="fotograf"/>  Fotoğraf(3)</label></li>
						<li class="list-group-item"><label for="saglikraporu"><input type="checkbox" name="saglikraporu" id="saglikraporu"/>  Sağlık Raporu</label></li>
						<li class="list-group-item"><label for="ogrbelgesi"><input type="checkbox" name="ogrbelgesi" id="ogrbelgesi"/>  Öğrenci Belgesi</label></li>
						<li class="list-group-item"><label for="adilsicilkaydi"><input type="checkbox" name="adilsicilkaydi" id="adilsicilkaydi"/>  Adil S. Kaydı</label></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<form class="form-horizontal" method="post" action="#">
						<legend>Öğrenci</legend>
						<div class="form-group">
					        <label class="col-md-4" for="dosyano">Dosya No</label>
					        <div class="col-md-8"> <input id="dosyano" name="dosyano" type="text" placeholder="Dosya No" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="adi">*Adı</label>
					        <div class="col-md-8"> <input id="adi" name="adi" type="text" placeholder="Adı" class="form-control input-md" required=""> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="soyadi">*Soyadı</label>
					        <div class="col-md-8"> <input id="soyadi" name="soyadi" type="text" placeholder="Soyadı" class="form-control input-md" required=""> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="ceptel">Gsm</label>
					        <div class="col-md-8"> <input id="ceptel" name="ceptel" type="text" placeholder="Gsm" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="email">E-Mail</label>
					        <div class="col-md-8"> <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="kayittarihi">Kayıt Tarihi</label>
					        <div class="col-md-8"> <input id="kayittarihi" name="kayittarihi" type="text" placeholder="Kayıt Tarihi" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="il">İl</label>
					        <div class="col-md-8"> <input id="il" name="il" type="text" placeholder="İl" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="ilce">İlçe</label>
					        <div class="col-md-8"> <input id="ilce" name="ilce" type="text" placeholder="İlçe" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="adres">Adres</label>
					        <div class="col-md-8"> <input id="adres" name="adres" type="text" placeholder="Adres" class="form-control input-md"> </div>
				      	</div>
					</form>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<form class="form-horizontal" method="post" action="#">
						<legend>Nüfus Bilgileri</legend>
						<div class="form-group">
					        <label class="col-md-4" for="kimlikturu">* Kimlik Türü</label>
					        <div class="col-md-8"> 
						        <select id="kimlikturu" name="kimlikturu" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Nüfüs Cüzdanı</option>
						        	<option value="1">Ehliyet</option>
						        	<option value="2">Pasaport</option>
						        	<option value="3">Aile Cüzdanı</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="serino">* Seri No</label>
					        <div class="col-md-8"> <input id="serino" name="serino" type="text" placeholder="Seri No" class="form-control input-md" required=""> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="uyrugu">* Uyruğu</label>
					        <div class="col-md-8">
						        <select id="uyrugu" name="uyrugu" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Türkiye</option>
						        	<option value="1">Diğer Ülkeler</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="tcno">* TC No</label>
					        <div class="col-md-8"> <input id="tcno" name="tcno" type="text" placeholder="TC No" class="form-control input-md" required="" maxlength="11" minlength="11"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="anneadi">* Anne Adı</label>
					        <div class="col-md-8"> <input id="anneadi" name="anneadi" type="text" placeholder="Anne Adı" class="form-control input-md" required=""> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="babaadi">* Baba Adı</label>
					        <div class="col-md-8"> <input id="babaadi" name="babaadi" type="text" placeholder="Baba Adı" class="form-control input-md" required=""> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="dogumyeri">* Doğum Yeri</label>
					        <div class="col-md-8"> <input id="dogumyeri" name="dogumyeri" type="text" placeholder="Doğum Yeri" class="form-control input-md" required=""> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="dogumtarihi">* Doğum Tarihi</label>
					        <div class="col-md-8"> <input id="dogumtarihi" name="dogumtarihi" type="text" placeholder="Doğum Tarihi" class="form-control input-md" required=""> </div>
				      	</div>
					</form>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<form class="form-horizontal" method="post" action="#">
						<legend>Nüfus Bilgileri - 2</legend>
						<div class="form-group">
					        <label class="col-md-4" for="il">* İl</label>
					        <div class="col-md-8"> 
						        <select id="il" name="il" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Diğer İller</option>
						        </select>
					        </div>
				      	</div>
				      	<div class="form-group">
					        <label class="col-md-4" for="ilce">* İlçe</label>
					        <div class="col-md-8"> 
						        <select id="ilce" name="ilce" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Diğer İlçeler</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="koy">* Köy / Mah.</label>
					        <div class="col-md-8"> <input id="koy" name="koy" type="text" placeholder="Köy / Mah." class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="ciltno">* Cilt No</label>
					        <div class="col-md-8"> <input id="ciltno" name="ciltno" type="text" placeholder="Cilt No" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="ailesirano">* Aile Sıra No</label>
					        <div class="col-md-8"> <input id="ailesirano" name="ailesirano" type="text" placeholder="Aile Sıra No" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="medenihali">* Medeni Hali</label>
					        <div class="col-md-8">
						        <select id="medenihali" name="medenihali" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Bekar</option>
						        	<option value="1">Evli</option>
						        	<option value="1">Dul</option>
						        	<option value="1">Boşanmış</option>
						        	<option value="1">Diğer</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="cinsiyet">* Cinsiyet</label>
					        <div class="col-md-8">
						        <select id="cinsiyet" name="cinsiyet" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Bekar</option>
						        	<option value="1">Evli</option>
						        	<option value="1">Diğer</option>
						        </select>
					        </div>
				      	</div>

					</form>
				</div>
			</div>
		</div>
    </div>
    <!-- Öğrenci Bilgileri Bitiş -->

    <!-- Veli-Okul Bilgileri Başlangıç -->
    <div role="tabpanel" class="tab-pane" id="profile">
    	<div class="container-fluid">
			<div class="row">
				
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<form class="form-horizontal" method="post" action="#">
						<legend>Veli Bilgileri</legend>
						<div class="form-group">
					        <label class="col-md-4" for="veliadi">Adı</label>
					        <div class="col-md-8"> <input id="veliadi" name="veliadi" type="text" placeholder="Adı" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="velisoyadi">Soyadı</label>
					        <div class="col-md-8"> <input id="velisoyadi" name="velisoyadi" type="text" placeholder="Soyadı" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="velitcno">T. C. No</label>
					        <div class="col-md-8"> <input id="velitcno" name="velitcno" type="text" placeholder="T. C. No" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="veliceptel">Gsm</label>
					        <div class="col-md-8"> <input id="veliceptel" name="veliceptel" type="text" placeholder="Gsm" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="veliistel">İş Telefon</label>
					        <div class="col-md-8"> <input id="veliistel" name="veliistel" type="text" placeholder="İş Telefon" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="yakinlik">Yakınlığı</label>
					        <div class="col-md-8"> <input id="yakinlik" name="yakinlik" type="text" placeholder="Yakınlığı" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="meslegi">Mesleği</label>
					        <div class="col-md-8"> <input id="meslegi" name="meslegi" type="text" placeholder="Mesleği" class="form-control input-md"> </div>
				      	</div>
					</form>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<form class="form-horizontal" method="post" action="#">
						<legend>Okul Bilgileri</legend>
						<div class="form-group">
					        <label class="col-md-4" for="okulturu">Okul Türü</label>
					        <div class="col-md-8"> 
						        <select id="okulturu" name="okulturu" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Üniversite</option>
						        	<option value="1">Lise</option>
						        	<option value="2">Orta Okul</option>
						        	<option value="3">İlk Okul</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="okulno">Okul No</label>
					        <div class="col-md-8"> <input id="okulno" name="okulno" type="text" placeholder="Okul No" class="form-control input-md"> </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="okulil">İl</label>
					        <div class="col-md-8"> 
						        <select id="okulil" name="okulil" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Erzurum</option>
						        	<option value="2">Bursa</option>
						        	<option value="3">Diğer İller</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="okulilce">İlçe</label>
					        <div class="col-md-8"> 
						        <select id="okulilce" name="okulilce" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Erzurum / Merkez</option>
						        	<option value="0">Bursa / Osmangazi</option>
						        	<option value="3">Diğer İlçeler</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="okulunadi">Okul Adı</label>
					        <div class="col-md-8"> 
						        <select id="okulunadi" name="okulunadi" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Atatürk Üniversitesi</option>
						        	<option value="1">Endütri Meslek Lisesi</option>
						        	<option value="2">50. Yıl İlk Okulu</option>
						        	<option value="3">Diğer Okullar</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="fakulte">Fakülte</label>
					        <div class="col-md-8"> 
						        <select id="fakulte" name="fakulte" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Mühendislik</option>
						        	<option value="1">Edebiyat</option>
						        	<option value="2">Mimarlık</option>
						        	<option value="3">Diğer Fakülteler</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="bolumler">Bölümler</label>
					        <div class="col-md-8"> 
						        <select id="bolumler" name="bolumler" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">Yazılım Mühendisliği</option>
						        	<option value="1">Bilgisayar Programcılığı</option>
						        	<option value="2">İngiliz Dİli ve Edebiyatı</option>
						        	<option value="3">Felsefe Bölümü</option>
						        	<option value="4">Diğer Bölümler</option>
						        </select>
					        </div>
				      	</div>
						<div class="form-group">
					        <label class="col-md-4" for="sinif">Sınıf</label>
					        <div class="col-md-8"> 
						        <select id="sinif" name="sinif" class="form-control" required="">
						        	<option value="-1">Seçiniz</option>
						        	<option value="0">1</option>
						        	<option value="1">2</option>
						        	<option value="2">3</option>
						        	<option value="3">Diğer Sınıflar</option>
						        </select>
					        </div>
				      	</div>
					</form>
				</div>
			</div>
		</div>
    </div>
    <!-- Veli-Okul Bilgileri Bitiş -->
    
    <!-- Ödeme Planı Başlangıç -->
    <div role="tabpanel" class="tab-pane" id="messages">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="table-responsive">
						<table id="table" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
								  <th>Sıra No</th>
								  <th>Tutar</th>
								  <th>Vade Tarihi</th>
								  <th>Ödeme Tarihi</th>
								  <th>Evrak No</th>
								  <th>Ödeme Tipi</th>
								  <th>Açıklama</th>
								  <th>İşlemler</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>100 ₺</td>
									<td>23/09/2016</td>
									<td>23/09/2016</td>
									<td>0001</td>
									<td>Nakit</td>
									<td>Bu Deneme Mesajıdır</td>
									<td><a href="#" class="btn btn-success">Öde</a> <a href="#" class="btn btn-warning">Düzenle</a> <a href="#" class="btn btn-danger">Sil</a> <a href="#" class="btn btn-info">Detay</a> <a href="#" class="btn btn-primary">İptal</a></td>
								</tr>
								<tr>
									<td>2</td>
									<td>350 ₺</td>
									<td>24/09/2016</td>
									<td>24/09/2016</td>
									<td>0002</td>
									<td>Kredi Katı</td>
									<td>Bu Deneme Mesajıdır</td>
									<td><a href="#" class="btn btn-success">Öde</a> <a href="#" class="btn btn-warning">Düzenle</a> <a href="#" class="btn btn-danger">Sil</a> <a href="#" class="btn btn-info">Detay</a> <a href="#" class="btn btn-primary">İptal</a></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
								  <th>Sıra No</th>
								  <th>Tutar</th>
								  <th>Vade Tarihi</th>
								  <th>Ödeme Tarihi</th>
								  <th>Evrak No</th>
								  <th>Ödeme Tipi</th>
								  <th>Açıklama</th>
								  <th>İşlemler</th>
								</tr>
							</tfoot>
						</table>
					</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- Ödeme Planı Bitiş -->
    
    <!-- Notlar Başlangıç -->
    <div role="tabpanel" class="tab-pane" id="notlar">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="form-group">
				        <label class="col-md-4" for="saglikbilgileri">Sağlık Bilgileri</label>
				        <div class="col-md-8"> <textarea id="saglikbilgileri" name="saglikbilgileri" placeholder="Sağlık Bilgileri" class="form-control input-md"> </textarea></div>
			      	</div>
					<div class="form-group">
				        <label class="col-md-4" for="yoneticinotu">Yönetici Notu</label>
				        <div class="col-md-8"> <textarea id="yoneticinotu" name="yoneticinotu" placeholder="Yönetici Notu" class="form-control input-md"> </textarea></div>
			      	</div>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    				<ul class="list-group">
						<li class="list-group-item"><h4 class="h4">Alışkanlıklar</h4></li>
						<li class="list-group-item"><label for="sigara"><input type="checkbox" name="sigara" id="sigara"/>  Sigara</label></li>
						<li class="list-group-item"><label for="alkol"><input type="checkbox" name="alkol" id="alkol"/>  Alkol</label></li>
						<li class="list-group-item"><label for="uyusturucu"><input type="checkbox" name="uyusturucu" id="uyusturucu"/>  Uyuşturucu</label></li>
						<li class="list-group-item"><label for="kumar"><input type="checkbox" name="kumar" id="kumar"/>  Kumar</label></li>
						<li class="list-group-item"><label for="bonzai"><input type="checkbox" name="bonzai" id="bonzai"/>  Bonza</label></li>
						<li class="list-group-item"><label for="sosyalmdya"><input type="checkbox" name="sosyalmdya" id="sosyalmdya"/>  Sosyal Medya</label></li>
						<li class="list-group-item"><label for="internet"><input type="checkbox" name="internet" id="internet"/>  İnternet</label></li>
					</ul>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- Notlar Bitiş -->
  </div>

</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.js"></script>
<script src="js/script.js"></script>
</body>
</html>