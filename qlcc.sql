 drop database if exists qlcc;
 create database qlcc  ;
use qlcc;

CREATE TABLE gv(
	magv varchar(6) not null primary key,
	tengv varchar(50) not null COLLATE utf8_unicode_ci,
	gmail varchar(50) not null
)ENGINE=InnoDB;

-- CREATE TABLE bangchamcong(
--   mabcc varchar(10) not null primary key,
--   diengiai varchar(100) COLLATE utf8_unicode_ci
-- )ENGINE=InnoDB;
CREATE TABLE congviec(
	macongviec varchar(3) CHARACTER SET utf8 COLLATE utf8_bin not null primary key,
	noidung varchar(200) COLLATE utf8_unicode_ci
)ENGINE=InnoDB;
-- CREATE TABLE ctbangchamcong(
--   mactbcc int  auto_increment not null,
--   mabcc varchar(10),
--   macongviec varchar(3) CHARACTER SET utf8 COLLATE utf8_bin,
--   primary key(mactbcc,mabcc,macongviec),
--   foreign key(mabcc) references bangchamcong(mabcc),
--   foreign key(macongviec) references congviec(macongviec)
-- )ENGINE=InnoDB;
CREATE TABLE ctcongviec(
	magv varchar(6),
	macongviec varchar(3) CHARACTER SET utf8 COLLATE utf8_bin,
	ngaythuchien date,
	buoi varchar(6),
	ghichu varchar(200) COLLATE utf8_unicode_ci,
	primary key(magv,ngaythuchien,buoi),
	foreign key (macongviec) references congviec(macongviec),
	foreign key (magv) references gv(magv)
)ENGINE=InnoDB;


-- isert giang vien

  INSERT INTO gv(magv,tengv,gmail) VALUES('12661','Võ Phước Hưng','hungvo@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00241','Nguyễn Hoàng Duy Thiện','thiennhd@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('14204','Nguyễn Bá Nhiệm','nhiemnb@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00245','Nguyễn Bảo Ân','annb@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00250','Võ Thành C','vothanhc@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00248','Phạm Minh Đương','duongminhpham@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('12705','Nguyễn Trần Diễm Hạnh','diemhanh_tvu@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00257','Nguyễn Mộng Hiền','hientvu@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00254','Ngô Thanh Huy','huyngocntt@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00242','Dương Ngọc Vân Khanh','vankhanh@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00244','Nguyễn Nhứt Lam','lamnn@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00255','Phạm Thị Trúc Mai','pttmai@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00253','Đoàn Phước Miền','phuocmien@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('12701','Trần Văn Nam','namtv@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00252','Trầm Hoàng Nam','tramhoangnam@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('03546','Phan Thị Phương Nam','ptpnam@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('12700','Khấu Văn Nhựt','nhutkhau@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00258','Nhan Minh Phúc','nhanminhphuc@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('03562','Nguyễn Khắc Quốc','nkquoc@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('12702','Nguyễn Thừa Phát Tài','phattai@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00243','Huỳnh Văn Thanh','hvthanh@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00246','Nguyễn Ngọc Đan Thanh','ngocdanthanhdt@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('03539','Lê Minh Tự','lmtu@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00249','Hà Thị Thúy Vi','hattvi201084@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('00251','Trịnh Quốc Việt','tqviettv@tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('123456','Mai Ngọc Thanh Tân','110114072@sv.tvu.edu.vn');
  INSERT INTO gv(magv,tengv,gmail) VALUES('654321','Ngô Quốc Anh','laudaikinhdi@gmail.com');
  INSERT INTO gv(magv,tengv,gmail) VALUES('456789','Lâm Công Đỉnh','thanhtan876362@gmail.com');

-- isert macongviec
  INSERT INTO congviec(macongviec,noidung) VALUES('+','');
  INSERT INTO congviec(macongviec,noidung) VALUES('X','');
  INSERT INTO congviec(macongviec,noidung) VALUES('S1','');
  INSERT INTO congviec(macongviec,noidung) VALUES('S2','');
  INSERT INTO congviec(macongviec,noidung) VALUES('S3','');
  INSERT INTO congviec(macongviec,noidung) VALUES('S4','');
  INSERT INTO congviec(macongviec,noidung) VALUES('S5','');
  INSERT INTO congviec(macongviec,noidung) VALUES('C1','');
  INSERT INTO congviec(macongviec,noidung) VALUES('C2','');
  INSERT INTO congviec(macongviec,noidung) VALUES('C3','');
  INSERT INTO congviec(macongviec,noidung) VALUES('C4','');
  INSERT INTO congviec(macongviec,noidung) VALUES('C5','');
  INSERT INTO congviec(macongviec,noidung) VALUES('T1','');
  INSERT INTO congviec(macongviec,noidung) VALUES('T2','');
  INSERT INTO congviec(macongviec,noidung) VALUES('T3','');
  INSERT INTO congviec(macongviec,noidung) VALUES('T4','');
  INSERT INTO congviec(macongviec,noidung) VALUES('T5','');
  INSERT INTO congviec(macongviec,noidung) VALUES('Ts','');
  INSERT INTO congviec(macongviec,noidung) VALUES('Ds','');
  INSERT INTO congviec(macongviec,noidung) VALUES('Nb','');
  INSERT INTO congviec(macongviec,noidung) VALUES('L','');
  INSERT INTO congviec(macongviec,noidung) VALUES('V','');
  INSERT INTO congviec(macongviec,noidung) VALUES('R','');
  INSERT INTO congviec(macongviec,noidung) VALUES('P1','');
  INSERT INTO congviec(macongviec,noidung) VALUES('P2','');
  INSERT INTO congviec(macongviec,noidung) VALUES('P3','');
  INSERT INTO congviec(macongviec,noidung) VALUES('P4','');
  INSERT INTO congviec(macongviec,noidung) VALUES('P5','');
  INSERT INTO congviec(macongviec,noidung) VALUES('No','');
  INSERT INTO congviec(macongviec,noidung) VALUES('TS','');
  INSERT INTO congviec(macongviec,noidung) VALUES('P','');
  INSERT INTO congviec(macongviec,noidung) VALUES('NH','');
  INSERT INTO congviec(macongviec,noidung) VALUES('xx','');
  INSERT INTO congviec(macongviec,noidung) VALUES('Cô','');
  INSERT INTO congviec(macongviec,noidung) VALUES('Ô','');
  INSERT INTO congviec(macongviec,noidung) VALUES('CT','');
  INSERT INTO congviec(macongviec,noidung) VALUES('ct','');
  INSERT INTO congviec(macongviec,noidung) VALUES('TR','');
  INSERT INTO congviec(macongviec,noidung) VALUES('Đ','');
  INSERT INTO congviec(macongviec,noidung) VALUES('DL','');
  INSERT INTO congviec(macongviec,noidung) VALUES('DT','');
  INSERT INTO congviec(macongviec,noidung) VALUES('TC','');
  INSERT INTO congviec(macongviec,noidung) VALUES('c','');
  INSERT INTO congviec(macongviec,noidung) VALUES('H','');
  INSERT INTO congviec(macongviec,noidung) VALUES('','Không có lịch');


