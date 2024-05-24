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