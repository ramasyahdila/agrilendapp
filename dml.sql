INSERT INTO `data_akun_pemerintah` (`id_pemerintah`, `username_pemerintah`, `password`, `nama_pemerintah`, `id_kota`, `no_tlp`, `foto_profil`) VALUES
(1, 'LMJ123', '$2y$10$hyRqOp8qMBQODzV56yYd4Oe1FCSTic0gQjova7sDxMtDJqiOYa7n6', 'Dinas Lumajang', 1, '081222222222', 0x666f746f732f4f75693656414c7636434f51656647344158307552575542786a66456a6e6a343445716e3544314a2e6a7067);

INSERT INTO `data_akun_petani` (`id_petani`, `username_petani`, `password`, `nik`, `nama_petani`, `ttl_petani`, `pekerjaan`, `alamat_petani`, `id_desa`, `no_tlp`, `id_poktan`, `foto_profil`) VALUES
(1, 'qwerty12', '$2y$10$ths9wPFIIP4cZKNzDy8aKejeKK0Q2Df7e.GRwCgtvW98VcTlBjt..', '3514092222222222', 'Syahdiladarama', '2024-05-06', 'mahasiswa', 'Jl. Melati no 23', 1, '081244444444', 1, 0x666f746f732f53624a7155685649496252656564696c38376d374f6a70646931556a77454933483570726868497a2e6a7067),
(2, 'saya123', '$2y$10$YbfG/aBLD2ZgbziINk7g/uyyixHIOwwApMOxvFLfiNG5TzyFoVUEW', '3514095555555555', 'saya', '1986-07-17', 'buruh', 'jl. jawa no3', 1, '081288888888', 1, 0x666f746f732f4e3633684630595a684a756c596a68433364554d456f51726c753756497950546a7876487531587a2e6a7067);

INSERT INTO `data_akun_poktan` (`id_poktan`, `username_poktan`, `password`, `nama_poktan`, `alamat_poktan`, `id_desa`, `id_pemerintah`, `no_tlp`, `foto_profil`) VALUES
(1, 'MLT1234', '$2y$10$FvlerVT64qx2HwtaPqy34.C3sQIGt7ZGL/8eZTRnPMkEVTenEDJvS', 'Poktan Melati', 'JL. Melati Desa Nogosari', 1, 1, '081233333333', 0x666f746f5f706f6b74616e2f506969303449314c3352744563574b4e5248414d334d51436e616d7a6b564a4f7444316e483753322e6a7067);

INSERT INTO `data_desa` (`id_desa`, `desa`, `id_kota`) VALUES
(1, 'Nogosari', 1);

INSERT INTO `data_kota` (`id_kota`, `kota`) VALUES
(1, 'Lumajang'),
(2, 'Jember');

INSERT INTO `data_metode_bayar` (`id_metode`, `metode_bayar`) VALUES
(1, 'Transfer'),
(2, 'Tunai');

INSERT INTO `data_pengajuan_modal` (`id_pengajuan`, `id_petani`, `jml_pinjam`, `bunga`, `jml_diterima`, `tgl_pinjam`, `tenggat_kembali`, `id_status_pengajuan`, `updated_at`, `created_at`) VALUES
(6, 1, 500000, 5000, 500000, '2024-05-24', '2024-06-07', 4, '2024-05-23 11:23:49', '2024-05-23 11:05:51'),
(7, 1, 500000, 10000, 500000, '2024-05-21', '2024-05-30', 1, '2024-05-23 23:40:04', '2024-05-23 23:40:04'),
(8, 2, 500000, 5000, 500000, '2024-05-22', '2024-06-06', 1, '2024-05-23 23:42:16', '2024-05-23 23:42:16');

INSERT INTO `data_status_laporan` (`id_status_laporan`, `status_laporan`) VALUES
(1, 'Belum Diteri'),
(2, 'Terkonfirmas'),
(3, 'Sudah Diteri'),
(4, 'Ditolak');

INSERT INTO `data_status_pengajuan_modal` (`id_status_pengajuan`, `status_pengajuan`) VALUES
(1, 'Belum Dikonfirmasi'),
(2, 'Terkonfirmasi'),
(3, 'Sudah Diterima'),
(4, 'Ditolak');

INSERT INTO `data_status_tagihan` (`id_status_tagihan`, `status_tagihan`) VALUES
(1, 'Selesai'),
(2, 'Sudah Bayar'),
(3, 'Belum Bayar'),
(4, 'Tidak Bisa B'),
(5, 'Sudah Bayar '),
(6, 'Belum Bayar ');