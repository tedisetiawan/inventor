<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";
include "../config/class_paging.php";
include "../config/fungsi_rupiah.php";

// Bagian Home
if ($_GET[module]=='home'){
  if ($_SESSION['leveluser']=='admin'){
  echo "<h2>Selamat Datang</h2>
          <p>Hai <b>$_SESSION[namalengkap]</b>, selamat datang di halaman Administrator.<br> Silahkan klik menu pilihan yang berada 
          di sebelah kiri untuk mengelola content website. </p>
          <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
          <p align=right>Login : $hari_ini, ";
  echo tgl_indo(date("Y m d")); 
  echo " | "; 
  echo date("H:i:s");
  echo " WIB</p>";
  }
}

// Bagian Modul
elseif ($_GET[module]=='modul'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_modul/modul.php";
  }
}

// Bagian Kategori
elseif ($_GET[module]=='kategori'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kategori/kategori.php";
  }
}

// Bagian Produk
elseif ($_GET[module]=='produk'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_produk/produk.php";
  }
}


// Bagian Order
elseif ($_GET[module]=='order'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_order/order.php";
  }
}

// Bagian Profil
elseif ($_GET[module]=='profil'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_profil/profil.php";
  }
}

// Bagian Order
elseif ($_GET[module]=='hubungi'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_hubungi/hubungi.php";
  }
}

// Bagian Cara Pembelian
elseif ($_GET[module]=='carabeli'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_carabeli/carabeli.php";
  }
}

// Bagian Banner
elseif ($_GET[module]=='banner'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_banner/banner.php";
 // }
}

// Bagian Kota/Ongkos Kirim
elseif ($_GET[module]=='ongkoskirim'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_ongkoskirim/ongkoskirim.php";
  }
}

// Bagian Password
elseif ($_GET[module]=='password'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_password/password.php";
  }
}

// Bagian Laporan
elseif ($_GET[module]=='laporan'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_laporan/laporan.php";
 // }
}

// Bagian sub Laporan total barang
elseif ($_GET[module]=='laporanstokbarang'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_laporan/laporanstoktotalbarang.php";
 // }
}

// Bagian sub Laporan barang masuk
elseif ($_GET[module]=='laporanbarangmasuk'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_laporan/laporanbarangmasuk.php";
 // }
}

// Bagian sub Laporan barang keluar
elseif ($_GET[module]=='laporanbarangkeluar'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_laporan/laporanbarangkeluar.php";
 // }
}

// Bagian sub Laporan barang keluar
elseif ($_GET[module]=='laporanbarangreturn'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_laporan/laporanbarangreturn.php";
 // }
}

// Bagian YM
elseif ($_GET[module]=='ym'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_ym/ym.php";
 // }
}

// Bagian Download
elseif ($_GET[module]=='download'){
 // if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_download/download.php";
 // }
}

// Bagian listkategori
elseif ($_GET[module]=='listkategori'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_listkategori/listkategori.php";
 //  }
}

// Bagian statistik
elseif ($_GET[module]=='statistik'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_stat/stat.php";
  //}
}

// Bagian grafik
elseif ($_GET[module]=='grafik'){
  //if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_grafik/grafik.php";
  //}
}

// Bagian admin web
elseif ($_GET[module]=='admin'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_admin/admin.php";
  }
}

// Bagian user
elseif ($_GET[module]=='user'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_user/users.php";
  }
}

// Bagian sub kategori
elseif ($_GET[module]=='subkategori'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_sub_kategori/sub_kategori.php";
  }
}



// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
