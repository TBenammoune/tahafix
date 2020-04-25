create database Gestion_Commande
use Gestion_Commande

/*==============================================================*/
/* Table : Client                                               */
/*==============================================================*/
create table Client
(
   IdCl                 int not null,
   NameCl               varchar(254),
   TelephoneCl          int,
   AdressCl             varchar(254),
   CreditcardCl         int,
   primary key (IdCl)
);
go
/*Show table*/
select * from Client

/*Add*/
insert into Client values(1,'Taha',0654218549,'40 street Nor',12)
insert into Client values(2,'Hassan',0612348549,'412 street Dor',51216);
insert into Client values(3,'Meriam',0656548549,'51 street Kor',12657)
insert into Client values(4,'Zakaria',0724358549,'41 street Zor',24556)
insert into Client values(5,'Nour',0664580549,'63 street 9or',12767)

/*update*/
update Client set NameCl='I am'
where AdressCl='51 street Kor';

/*delete*/
delete from Client
where NameCl='I am';

/*delete table or (clear)*/
drop table Client

/*==============================================================*/
/* Table : CommandeLine                                         */
/*==============================================================*/
create table CommandeLine
(
   Id                   int not null,
   CommandeQt           float,
   CommandeId           varchar(254),
   primary key (Id)
);
go
select * from CommandeLine
insert into CommandeLine values(1,1000,'63 street 9or')

/*==============================================================*/
/* Table : "Order"                                              */
/*==============================================================*/
create table "Order"
(
   IdC                  int,
   DateC                datetime
);

/*==============================================================*/
/* Table : Product                                              */
/*==============================================================*/
create table Product
(
   Id                   int,
   Name                 varchar(254),
   DateBuy              datetime,
   Q_Stock              float
);





/*==============================================================*/
/* Sign-in                                           */
/*==============================================================*/

create login root13
with PassWord='youcode';
go
/*user*/
create user root13 for login root13;
go

grant all to root13;
go

/*Grant option or allow option*/

create login utilisateur
with PassWord='youcode1';
go

/*user*/
create user utilisateur for login utilisateur;
go

grant insert,delete to utilisateur;
go