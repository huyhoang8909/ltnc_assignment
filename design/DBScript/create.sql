/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     4/21/2016 9:47:25 AM                         */
/*==============================================================*/



/*==============================================================*/
/* Table: CART                                                  */
/*==============================================================*/
create table CART
(
   CART_ID              int not null,
   USER_ID              int,
   STATUS               varchar(10) not null
);

alter table CART
   add primary key (CART_ID);

/*==============================================================*/
/* Table: CART_ITEM                                             */
/*==============================================================*/
create table CART_ITEM
(
   CART_ID              int not null,
   ITEM_ID              int not null
);

alter table CART_ITEM
   add primary key (CART_ID, ITEM_ID);

/*==============================================================*/
/* Table: CATEGORY                                              */
/*==============================================================*/
create table CATEGORY
(
   CATEGORY_ID          int not null,
   CATEGORY_CATEGORY_ID int,
   CATEGORY_NAME        varchar(50) not null
);

alter table CATEGORY
   add primary key (CATEGORY_ID);

/*==============================================================*/
/* Table: CUSTOMERADDRESS                                       */
/*==============================================================*/
create table CUSTOMERADDRESS
(
   ADDRESS_ID           int not null auto_increment primary key,
   USER_ID              int not null,
   RECIPIENT            varchar(50) not null,
   PHONE_NUMBER         varchar(15) not null,
   ADDRESS_LINE_1       varchar(256),
   ADDRESS_LINE_2       varchar(256),
   DISTRICT             varchar(50) not null,
   PROVINCE             varchar(50) not null,
   COUNTRY              varchar(50) not null,
   ZIPCODE              varchar(15)
);

alter table CUSTOMERADDRESS
   add primary key (ADDRESS_ID);

/*==============================================================*/
/* Table: ITEM                                                  */
/*==============================================================*/
create table ITEM
(
   ITEM_ID              int not null auto_increment primary key,
   MANUFACTURER_ID      int not null,
   PROMOTION_ID         int,
   CATEGORY_ID          int not null,
   ITEM_NAME            varchar(256) not null,
   ITEM_PRICE           float(10) not null,
   ITEM_QUANTITY        int not null
);

alter table ITEM
   add primary key (ITEM_ID);

/*==============================================================*/
/* Table: ITEM_SUPPLIER                                         */
/*==============================================================*/
create table ITEM_SUPPLIER
(
   SUPPLIER_ID          int not null,
   ITEM_ID              int not null
);

alter table ITEM_SUPPLIER
   add primary key (SUPPLIER_ID, ITEM_ID);

/*==============================================================*/
/* Table: MANUFACTURER                                          */
/*==============================================================*/
create table MANUFACTURER
(
   MANUFACTURER_ID      int not null auto_increment primary key,
   MANUFACTURER_NAME    varchar(50) not null
);

alter table MANUFACTURER
   add primary key (MANUFACTURER_ID);

/*==============================================================*/
/* Table: ORDERS                                               */
/*==============================================================*/
create table ORDERS
(
   ORDER_ID             int not null auto_increment primary key,
   SHIPPING_TYPE_ID     int not null,
   PAYMENT_TYPE_ID      tinyint,
   USER_ID              int not null,
   ADDRESS_ID           int not null,
   PAYMENT_ID           int,
   ORDER_STATUS         tinyint not null,
   ORDER_DATE           timestamp not null,
   DELIVERY_DATE        timestamp not null,
   TOTAL                float(8) not null,
   PAYMENT_KEY          varchar(20) not null,
   PAYMENT_CODE         varchar(20) not null
);

alter table ORDERS
   add primary key (ORDER_ID);

/*==============================================================*/
/* Table: ORDER_ITEM                                            */
/*==============================================================*/
create table ORDER_ITEM
(
   ITEM_ID              int not null,
   ORDER_ID             int not null
);

alter table ORDER_ITEM
   add primary key (ITEM_ID, ORDER_ID);

/*==============================================================*/
/* Table: PAYMENTTYPE                                           */
/*==============================================================*/
create table PAYMENTTYPE
(
   PAYMENT_TYPE_ID      tinyint not null,
   PAYMENT_TYPE_DESC    varchar(50) not null
);

alter table PAYMENTTYPE
   add primary key (PAYMENT_TYPE_ID);

/*==============================================================*/
/* Table: PROMOTION                                             */
/*==============================================================*/
create table PROMOTION
(
   PROMOTION_ID         int not null auto_increment primary key,
   START_DATE           timestamp,
   END_DATE             timestamp,
   DISCOUNT_PERCENT     tinyint,
   PROMOTION_CODE       varchar(15)
);

alter table PROMOTION
   add primary key (PROMOTION_ID);

/*==============================================================*/
/* Table: RETURNSTATUS                                          */
/*==============================================================*/
create table RETURNSTATUS
(
   RETURN_ID            int not null,
   USER_ID              int not null,
   START_DATE           date not null,
   END_DATE             date not null,
   STATUS               tinyint not null
);

alter table RETURNSTATUS
   add primary key (RETURN_ID);

/*==============================================================*/
/* Table: RETURNSTATUS_ITEM                                     */
/*==============================================================*/
create table RETURNSTATUS_ITEM
(
   RETURN_ID            int not null,
   ITEM_ID              int not null
);

alter table RETURNSTATUS_ITEM
   add primary key (RETURN_ID, ITEM_ID);

/*==============================================================*/
/* Table: REVIEWS                                               */
/*==============================================================*/
create table REVIEWS
(
   REVIEW_ID            int not null auto_increment primary key,
   USER_ID              int not null,
   ITEM_ID              int not null,
   RATING               tinyint not null,
   COMMENT              longtext
);

/*==============================================================*/
/* Table: ROLE                                                  */
/*==============================================================*/
create table ROLE
(
   ROLE_ID              tinyint not null,
   ROLE_NAME            varchar(25) not null,
   DESCRIPTION          varchar(50)
);

alter table ROLE
   add primary key (ROLE_ID);

/*==============================================================*/
/* Table: ROLE_USER                                             */
/*==============================================================*/
create table ROLE_USER
(
   ROLE_ID              tinyint not null,
   USER_ID              int not null
);

alter table ROLE_USER
   add primary key (ROLE_ID, USER_ID);

/*==============================================================*/
/* Table: SHIPPINGTYPE                                          */
/*==============================================================*/
create table SHIPPINGTYPE
(
   SHIPPING_TYPE_ID     int not null,
   SHIPPING_TYPE_NAME   varchar(50) not null,
   SHIPPING_COST        float(6) not null,
   SHIPPING_DAYS        tinyint not null
);

alter table SHIPPINGTYPE
   add primary key (SHIPPING_TYPE_ID);

/*==============================================================*/
/* Table: SUPPLIER                                              */
/*==============================================================*/
create table SUPPLIER
(
   SUPPLIER_ID          int not null,
   SUPPLIER_NAME        varchar(50) not null,
   SUPPLIER_TYPE        varchar(50) not null
);

alter table SUPPLIER
   add primary key (SUPPLIER_ID);

/*==============================================================*/
/* Table: TRACKINGTABLE                                         */
/*==============================================================*/
create table TRACKINGTABLE
(
   TRACKING_ID          int not null auto_increment primary key,
   POSITION             varchar(200) not null,
   TRACK_TIME           timestamp not null
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   USER_ID              int not null auto_increment primary key,
   CART_ID              int,
   USER_NAME            varchar(50) not null,
   PASSWORD             varchar(50) not null,
   NAME                 varchar(50) not null,
   EMAIL_ADRESS         varchar(50) not null,
   PHONE                varchar(15)
);

alter table USER
   add unique AK_ID_USERNAME (USER_NAME);

/*==============================================================*/
/* Table: USERPAYMENT                                           */
/*==============================================================*/
create table USERPAYMENT
(
   PAYMENT_ID           int not null,
   USER_ID              int not null,
   CARD_NAME            varchar(50) not null,
   CREDIT_CARD_NUMBER   varchar(20) not null,
   SECURITY_NUMBER      int not null,
   EXP_DATE             varchar(1024) not null
);

alter table USERPAYMENT
   add primary key (PAYMENT_ID);

/*==============================================================*/
/* Table: USER_ITEM_FAVOURITE                                   */
/*==============================================================*/
create table USER_ITEM_FAVOURITE
(
   USER_ID              int not null,
   ITEM_ID              int not null
);

alter table USER_ITEM_FAVOURITE
   add primary key (USER_ID, ITEM_ID);

alter table CART add constraint FK_USER_CART2 foreign key (USER_ID)
      references USER (USER_ID) on delete cascade on update cascade;

alter table CART_ITEM add constraint FK_CART_ITEM foreign key (CART_ID)
      references CART (CART_ID) on delete cascade on update cascade;

alter table CART_ITEM add constraint FK_CART_ITEM2 foreign key (ITEM_ID)
      references ITEM (ITEM_ID) on delete cascade on update cascade;

alter table CATEGORY add constraint FK_PARENT_CATEGORY foreign key (CATEGORY_CATEGORY_ID)
      references CATEGORY (CATEGORY_ID) on delete cascade on update cascade;

alter table CUSTOMERADDRESS add constraint FK_USER_ADDRESS foreign key (USER_ID)
      references USER (USER_ID) on delete cascade on update cascade;

alter table ITEM add constraint FK_ITEM_CATEGORY foreign key (CATEGORY_ID)
      references CATEGORY (CATEGORY_ID) on delete cascade on update cascade;

alter table ITEM add constraint FK_ITEM_MANUFACTURER foreign key (MANUFACTURER_ID)
      references MANUFACTURER (MANUFACTURER_ID) on delete cascade on update cascade;

alter table ITEM add constraint FK_ITEM_PROMOTION foreign key (PROMOTION_ID)
      references PROMOTION (PROMOTION_ID) on delete cascade on update cascade;

alter table ITEM_SUPPLIER add constraint FK_ITEM_SUPPLIER foreign key (SUPPLIER_ID)
      references SUPPLIER (SUPPLIER_ID) on delete cascade on update cascade;

alter table ITEM_SUPPLIER add constraint FK_ITEM_SUPPLIER2 foreign key (ITEM_ID)
      references ITEM (ITEM_ID) on delete cascade on update cascade;

alter table ORDERS add constraint FK_ORDER_CUSTOMERADDRESS foreign key (ADDRESS_ID)
      references CUSTOMERADDRESS (ADDRESS_ID) on delete cascade on update cascade;

alter table ORDERS add constraint FK_ORDER_PAYMENT foreign key (PAYMENT_ID)
      references USERPAYMENT (PAYMENT_ID) on delete cascade on update cascade;

alter table ORDERS add constraint FK_ORDER_PAYMENTTYPE foreign key (PAYMENT_TYPE_ID)
      references PAYMENTTYPE (PAYMENT_TYPE_ID) on delete cascade on update cascade;

alter table ORDERS add constraint FK_ORDER_SHIPPING foreign key (SHIPPING_TYPE_ID)
      references SHIPPINGTYPE (SHIPPING_TYPE_ID) on delete cascade on update cascade;

alter table ORDERS add constraint FK_ORDER_USER foreign key (USER_ID)
      references USER (USER_ID) on delete cascade on update cascade;

alter table ORDER_ITEM add constraint FK_ORDER_ITEM foreign key (ITEM_ID)
      references ITEM (ITEM_ID) on delete cascade on update cascade;

alter table ORDER_ITEM add constraint FK_ORDER_ITEM2 foreign key (ORDER_ID)
      references ORDERS (ORDER_ID) on delete cascade on update cascade;

alter table RETURNSTATUS add constraint FK_USER_RETURN foreign key (USER_ID)
      references USER (USER_ID) on delete cascade on update cascade;

alter table RETURNSTATUS_ITEM add constraint FK_RETURNSTATUS_ITEM foreign key (RETURN_ID)
      references RETURNSTATUS (RETURN_ID) on delete cascade on update cascade;

alter table RETURNSTATUS_ITEM add constraint FK_RETURNSTATUS_ITEM2 foreign key (ITEM_ID)
      references ITEM (ITEM_ID) on delete cascade on update cascade;

alter table REVIEWS add constraint FK_ITEM_REVIEWS foreign key (ITEM_ID)
      references ITEM (ITEM_ID) on delete cascade on update cascade;

alter table REVIEWS add constraint FK_USER_REVIEW foreign key (USER_ID)
      references USER (USER_ID) on delete cascade on update cascade;

alter table ROLE_USER add constraint FK_ROLE_USER foreign key (ROLE_ID)
      references ROLE (ROLE_ID) on delete cascade on update cascade;

alter table ROLE_USER add constraint FK_ROLE_USER2 foreign key (USER_ID)
      references USER (USER_ID) on delete cascade on update cascade;

alter table USER add constraint FK_USER_CART foreign key (CART_ID)
      references CART (CART_ID) on delete cascade on update cascade;

alter table USERPAYMENT add constraint FK_USER_PAYMENT foreign key (USER_ID)
      references USER (USER_ID) on delete cascade on update cascade;

alter table USER_ITEM_FAVOURITE add constraint FK_USER_ITEM_FAVOURITE foreign key (USER_ID)
      references USER (USER_ID) on delete cascade on update cascade;

alter table USER_ITEM_FAVOURITE add constraint FK_USER_ITEM_FAVOURITE2 foreign key (ITEM_ID)
      references ITEM (ITEM_ID) on delete cascade on update cascade;


create trigger TIB_USER before insert
on USER for each row
begin
end;

