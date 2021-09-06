SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


create table administrator (a_id char(6) primary key, a_pass varchar(100) not null);
insert into administrator values ('A112', '123');
insert into administrator values ('A848', '962');
insert into administrator values ('A556', '894');




create table doc (a_id char(6) not null, d_id char(6) primary key not null, name varchar(30) not null, speciality varchar(50), qualification varchar(30));
alter table doc add constraint con_aid foreign key(a_id) references administrator(a_id) on delete cascade;
insert into doc values ('A112','D110','Devina','Radiologist','Ph.D');
insert into doc values ('A848','D120','Ankit','Hematologist','MBBS');
insert into doc values ('A556','D130','Navya','Cardiologist','DM');
insert into doc values ('A112','D140','Rishabh','Dermatologist','MD');
insert into doc values ('A556','D150','Salonee','Pediatrician','Dphil');
insert into doc values ('A112','D160','Divya','Dentist','MBBS');
insert into doc values ('A848','D170','Anushka','Psychiatrist','Ph.D');
insert into doc values ('A848','D180','Naman','Surgeon','DSurg');
insert into doc values ('A112','D190','Yash','Pathologist','DM');
insert into doc values ('A556','D200','Arjun','Immunologist','MD');





create table  medical_history ( p_id char(6) not null, disease varchar(30), prescription varchar(100),did varchar(6), ref_no char(6) primary key not null);

insert into medical_history values ('100','Hand Foot Mouth','Cetrizine','D150','11245');
insert into medical_history values ('101','Viral Fever','Paracetamol 500mg','D200','33412');
insert into medical_history values ('102','Typhoid','Zithromax,Ampicillin','D190','44762');
insert into medical_history values ('104','Cavity','Dental kit','D160','44721');


insert into medical_history values ('105','Constipation','Docusate','D150','8902');