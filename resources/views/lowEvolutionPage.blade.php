<!DOCTYPE html>
<html>
    <style>
        .element {
    background-color: #ffffff;
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
  }
  
  .element .div {
    background-color: #ffffff;
    overflow: hidden;
    width: 1728px;
    height: 2765px;
    position: relative;
  }
  
  .element .overlap {
    position: absolute;
    width: 1300px;
    height: 61px;
    top: 170px;
    left: 75px;
  }
  
  .element .rectangle {
    width: 1300px;
    height: 60px;
    top: 1px;
    border-radius: 8px;
    border: 1px solid;
    border-color: #737373;
    position: absolute;
    left: 0;
  }
  
  .element .button {
    position: absolute;
    width: 111px;
    height: 60px;
    top: 0;
    left: 1189px;
    background-color: #065386;
    border-radius: 8px;
  }
  
  .element .carbon-search {
    position: absolute;
    width: 32px;
    height: 32px;
    top: 15px;
    left: 1229px;
  }
  
  .element .text-wrapper {
    position: absolute;
    height: 27px;
    top: 17px;
    left: 27px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #737373;
    font-size: 20px;
    letter-spacing: -0.3px;
    line-height: normal;
  }
  
  .element .join-today-wrapper {
    position: absolute;
    width: 252px;
    height: 60px;
    top: 171px;
    left: 1401px;
    background-color: #065386;
    border-radius: 8px;
    overflow: hidden;
    all: unset;
    box-sizing: border-box;
  }
  
  .element .join-today {
    position: absolute;
    height: 27px;
    top: 16px;
    left: 43px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.3px;
    line-height: normal;
  }
  
  .element .group {
    position: absolute;
    width: 1730px;
    height: 183px;
    top: 2583px;
    left: 0;
  }
  
  .element .overlap-group {
    position: relative;
    width: 1728px;
    height: 183px;
    background-color: #252525;
  }
  
  .element .logo-wh {
    position: absolute;
    width: 240px;
    height: 77px;
    top: 60px;
    left: 1413px;
    object-fit: cover;
  }
  
  .element .COPYRIGHT-DRASS-ALL {
    position: absolute;
    width: 640px;
    height: 23px;
    top: 87px;
    left: 95px;
    font-family: "Roboto-Medium", Helvetica;
    font-weight: 500;
    color: #737373;
    font-size: 20px;
    letter-spacing: -0.3px;
    line-height: normal;
  }
  
  .element .span {
    font-family: "Roboto-Medium", Helvetica;
    font-weight: 500;
    color: #737373;
    font-size: 20px;
    letter-spacing: -0.3px;
  }
  
  .element .text-wrapper-2 {
    text-decoration: underline;
  }
  
  .element .overlap-2 {
    position: absolute;
    width: 1582px;
    height: 232px;
    top: 266px;
    left: 75px;
    background-image: url(../img/rectangle.jpg);
    background-size: 100% 100%;
  }
  
  .element .p {
    position: absolute;
    top: 76px;
    left: 37px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 40px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .element .text-wrapper-3 {
    position: absolute;
    top: 36px;
    left: 37px;
    font-family: "Open Sans-SemiBold", Helvetica;
    font-weight: 600;
    color: #ffffff;
    font-size: 22px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .element .div-wrapper {
    position: absolute;
    width: 230px;
    height: 37px;
    top: 150px;
    left: 37px;
    background-color: #e7e7e7;
    border-radius: 6px;
    overflow: hidden;
    all: unset;
    box-sizing: border-box;
  }
  
  .element .join-today-2 {
    left: 15px;
    position: absolute;
    height: 27px;
    top: 4px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.3px;
    line-height: normal;
  }
  
  .element .button-2 {
    position: absolute;
    width: 328px;
    height: 37px;
    top: 150px;
    left: 284px;
    background-color: #e7e7e7;
    border-radius: 6px;
    overflow: hidden;
  }
  
  .element .join-today-3 {
    left: 14px;
    position: absolute;
    height: 27px;
    top: 4px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 20px;
    text-align: center;
    letter-spacing: -0.3px;
    line-height: normal;
  }
  
  .element .overlap-3 {
    position: absolute;
    width: 1582px;
    height: 1960px;
    top: 499px;
    left: 58px;
    background-color: #fbfbfb;
    border: 2px solid;
    border-color: #ececec;
  }
  
  .element .STMD-programs-SBIR {
    position: absolute;
    width: 479px;
    height: 398px;
    top: 48px;
    left: 1081px;
    object-fit: cover;
  }
  
  .element .text-wrapper-4 {
    height: 35px;
    top: 44px;
    left: 52px;
    font-size: 30px;
    letter-spacing: -0.45px;
    position: absolute;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-5 {
    position: absolute;
    height: 35px;
    top: 690px;
    left: 56px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 30px;
    letter-spacing: -0.45px;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-6 {
    height: 35px;
    top: 501px;
    left: 1081px;
    font-size: 30px;
    letter-spacing: -0.45px;
    position: absolute;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-7 {
    position: absolute;
    height: 35px;
    top: 502px;
    left: 52px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 30px;
    letter-spacing: -0.45px;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-8 {
    position: absolute;
    height: 26px;
    top: 555px;
    left: 1081px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-9 {
    position: absolute;
    height: 30px;
    top: 595px;
    left: 1081px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-10 {
    position: absolute;
    height: 26px;
    top: 645px;
    left: 1081px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-11 {
    position: absolute;
    height: 30px;
    top: 685px;
    left: 1081px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .overlap-4 {
    position: absolute;
    width: 486px;
    height: 252px;
    top: 1209px;
    left: 1081px;
    background-image: url(./img/frame-1.svg);
    background-size: 100% 100%;
  }
  
  .element .text-wrapper-12 {
    top: 218px;
    left: 21px;
    color: #000000;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-13 {
    top: 218px;
    left: 73px;
    color: #ffffff;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-14 {
    top: 218px;
    left: 125px;
    color: #ffffff;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-15 {
    top: 218px;
    left: 181px;
    color: #000000;
    text-align: center;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-16 {
    top: 218px;
    left: 234px;
    color: #000000;
    text-align: center;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-17 {
    top: 218px;
    left: 286px;
    color: #000000;
    text-align: center;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-18 {
    top: 218px;
    left: 340px;
    color: #000000;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-19 {
    top: 218px;
    left: 392px;
    color: #000000;
    text-align: center;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-20 {
    top: 218px;
    left: 445px;
    color: #000000;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-21 {
    position: absolute;
    height: 30px;
    top: 10px;
    left: 2px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-22 {
    position: absolute;
    height: 30px;
    top: 53px;
    left: 2px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-23 {
    top: 10px;
    left: 101px;
    color: #000000;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-24 {
    top: 53px;
    left: 171px;
    color: #000000;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .overlap-5 {
    position: absolute;
    width: 158px;
    height: 76px;
    top: 1470px;
    left: 1083px;
    background-color: #e7e7e7;
  }
  
  .element .text-wrapper-25 {
    position: absolute;
    width: 129px;
    height: 60px;
    top: 7px;
    left: 14px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    text-align: center;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .overlap-6 {
    position: absolute;
    width: 156px;
    height: 76px;
    top: 1470px;
    left: 1243px;
    background-color: #e7e7e7;
  }
  
  .element .text-wrapper-26 {
    position: absolute;
    height: 30px;
    top: 22px;
    left: 10px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    text-align: center;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .demo-test-wrapper {
    position: absolute;
    width: 158px;
    height: 76px;
    top: 1470px;
    left: 1401px;
    background-color: #e7e7e7;
  }
  
  .element .demo-test {
    position: absolute;
    height: 30px;
    top: 22px;
    left: 13px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    text-align: center;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-27 {
    height: 35px;
    top: 856px;
    left: 1081px;
    font-size: 30px;
    letter-spacing: -0.45px;
    position: absolute;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-28 {
    top: 908px;
    position: absolute;
    height: 30px;
    left: 1081px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-29 {
    position: absolute;
    height: 35px;
    top: 989px;
    left: 1081px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 30px;
    letter-spacing: -0.45px;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-30 {
    position: absolute;
    height: 30px;
    top: 1041px;
    left: 1081px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-31 {
    position: absolute;
    height: 35px;
    top: 1799px;
    left: 56px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 30px;
    letter-spacing: -0.45px;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-32 {
    position: absolute;
    height: 30px;
    top: 1851px;
    left: 56px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-33 {
    position: absolute;
    height: 35px;
    top: 1122px;
    left: 1081px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 30px;
    letter-spacing: -0.45px;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-34 {
    position: absolute;
    height: 35px;
    top: 1594px;
    left: 1081px;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 30px;
    letter-spacing: -0.45px;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-35 {
    top: 1174px;
    position: absolute;
    height: 30px;
    left: 1081px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-36 {
    position: absolute;
    height: 30px;
    top: 1646px;
    left: 1081px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-37 {
    height: 35px;
    top: 1799px;
    left: 1081px;
    font-size: 30px;
    letter-spacing: -0.45px;
    position: absolute;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-38 {
    position: absolute;
    height: 30px;
    top: 1851px;
    left: 1081px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-39 {
    position: absolute;
    height: 30px;
    top: 1682px;
    left: 1143px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-40 {
    left: 1149px;
    position: absolute;
    height: 30px;
    top: 908px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-41 {
    top: 1174px;
    left: 1150px;
    color: #000000;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-42 {
    position: absolute;
    height: 30px;
    top: 908px;
    left: 1290px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-43 {
    left: 1344px;
    position: absolute;
    height: 30px;
    top: 908px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-44 {
    height: 26px;
    top: 735px;
    left: 1081px;
    font-size: 22px;
    letter-spacing: -0.33px;
    position: absolute;
    font-family: "Roboto-Bold", Helvetica;
    font-weight: 700;
    color: #000000;
    line-height: normal;
    white-space: nowrap;
  }
  
  .element .text-wrapper-45 {
    position: absolute;
    height: 30px;
    top: 775px;
    left: 1081px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-46 {
    position: absolute;
    width: 982px;
    height: 360px;
    top: 91px;
    left: 52px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #070707;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-47 {
    position: absolute;
    width: 982px;
    height: 90px;
    top: 549px;
    left: 52px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #070707;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .group-2 {
    position: absolute;
    width: 15px;
    height: 7px;
    top: 1691px;
    left: 1115px;
  }
  
  .element .line {
    width: 1px;
    height: 7px;
    top: 0;
    left: 0;
    position: absolute;
    object-fit: cover;
  }
  
  .element .img {
    width: 15px;
    height: 1px;
    top: 7px;
    left: 0;
    position: absolute;
    object-fit: cover;
  }
  
  .element .text-wrapper-48 {
    position: absolute;
    height: 30px;
    top: 1718px;
    left: 1171px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .group-3 {
    position: absolute;
    width: 15px;
    height: 7px;
    top: 1727px;
    left: 1143px;
  }
  
  .element .table {
    position: absolute;
    width: 1007px;
    height: 216px;
    top: 1529px;
    left: 51px;
  }
  
  .element .overlap-7 {
    position: relative;
    width: 983px;
    height: 216px;
  }
  
  .element .rectangle-2 {
    width: 983px;
    height: 61px;
    top: 0;
    background-color: #065386;
    position: absolute;
    left: 0;
  }
  
  .element .rectangle-3 {
    width: 983px;
    height: 80px;
    top: 136px;
    background-color: #f4f4f4;
    position: absolute;
    left: 0;
  }
  
  .element .rectangle-4 {
    width: 983px;
    height: 80px;
    top: 54px;
    background-color: #ffffff;
    position: absolute;
    left: 0;
  }
  
  .element .text-wrapper-49 {
    position: absolute;
    height: 30px;
    top: 13px;
    left: 17px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 22px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .element .text-wrapper-50 {
    position: absolute;
    height: 30px;
    top: 13px;
    left: 379px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 22px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .element .text-wrapper-51 {
    position: absolute;
    height: 30px;
    top: 13px;
    left: 484px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 22px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .element .text-wrapper-52 {
    position: absolute;
    height: 30px;
    top: 13px;
    left: 660px;
    font-family: "Open Sans-Bold", Helvetica;
    font-weight: 700;
    color: #ffffff;
    font-size: 22px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .element .text-wrapper-53 {
    top: 77px;
    position: absolute;
    height: 30px;
    left: 17px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-54 {
    top: 77px;
    left: 379px;
    color: #000000;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-55 {
    position: absolute;
    height: 30px;
    top: 77px;
    left: 484px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .this-organisation-is {
    position: absolute;
    height: 60px;
    top: 62px;
    left: 661px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-56 {
    top: 161px;
    position: absolute;
    height: 30px;
    left: 17px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-57 {
    top: 161px;
    left: 379px;
    color: #000000;
    position: absolute;
    height: 30px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .text-wrapper-58 {
    position: absolute;
    height: 30px;
    top: 161px;
    left: 484px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .this-organisation-is-2 {
    position: absolute;
    height: 60px;
    top: 146px;
    left: 661px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #000000;
    font-size: 22px;
    letter-spacing: -0.33px;
    line-height: normal;
  }
  
  .element .line-2 {
    width: 1px;
    height: 215px;
    top: 1px;
    left: 366px;
    position: absolute;
    object-fit: cover;
  }
  
  .element .line-3 {
    width: 1px;
    height: 215px;
    top: 1px;
    left: 472px;
    position: absolute;
    object-fit: cover;
  }
  
  .element .line-4 {
    width: 1px;
    height: 215px;
    top: 1px;
    left: 648px;
    position: absolute;
    object-fit: cover;
  }
  
  .element .group-4 {
    position: absolute;
    width: 978px;
    height: 711px;
    top: 750px;
    left: 56px;
    background-image: url(./img/image-1.png);
    background-size: cover;
    background-position: 50% 50%;
  }
  
  .element .vector {
    position: absolute;
    width: 254px;
    height: 243px;
    top: 368px;
    left: 326px;
  }
  
  .element .vector-2 {
    position: absolute;
    width: 112px;
    height: 65px;
    top: 222px;
    left: 838px;
  }
  
  .element .text-wrapper-59 {
    position: absolute;
    top: 101px;
    left: 75px;
    font-family: "Open Sans-Regular", Helvetica;
    font-weight: 400;
    color: #737373;
    font-size: 17px;
    letter-spacing: 0;
    line-height: normal;
  }
  
  .element .DRASS {
    position: absolute;
    width: 191px;
    height: 30px;
    top: 65px;
    left: 75px;
    object-fit: cover;
  }
  
    </style>
  <head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="element">
      <div class="div">
        <div class="overlap">
          <div class="rectangle"></div>
          <div class="button"></div>
          <img class="carbon-search" src="img/carbon-search.svg" />
          <div class="text-wrapper">Search Projects</div>
        </div>
        <button class="join-today-wrapper"><div class="join-today">Advanced Search</div></button>
        <div class="group">
          <div class="overlap-group">
          <img src="{{URL('images/DrassLogo1.png')}}" alt="">
            <p class="COPYRIGHT-DRASS-ALL">
              <span class="span">COPYRIGHT © DRASS ALL RIGHTS RESERVED | </span>
              <a href="https://www.drass.tech/privacy-policy/" target="_blank" rel="noopener noreferrer"
                ><span class="text-wrapper-2">PRIVACY POLICY</span></a
              >
            </p>
          </div>
        </div>
        <div class="overlap-2">
          <p class="p">Low evaporation rate storage media for cryogenic liquids, Phase I</p>
          <p class="text-wrapper-3">Small Business Innovation Research/Small Business Tech Transfer</p>
          <button class="div-wrapper"><div class="join-today-2">Sort Order: Relevance</div></button>
          <div class="button-2"><p class="join-today-3">Words and Phrases: No Selection</p></div>
        </div>
        <div class="overlap-3">
          <img class="STMD-programs-SBIR" src="img/STMD-programs-SBIR-1.png" />
          <div class="text-wrapper-4">Project Description</div>
          <div class="text-wrapper-5">Work Locations</div>
          <div class="text-wrapper-6">Project Organization</div>
          <div class="text-wrapper-7">Benefit:</div>
          <div class="text-wrapper-8">Organisation Performing Work</div>
          <div class="text-wrapper-9">State University Main Campus</div>
          <div class="text-wrapper-10">Legal Entity Role</div>
          <p class="text-wrapper-11">Space Technology Mission Directorate (STMD)</p>
          <div class="overlap-4">
            <div class="text-wrapper-12">1</div>
            <div class="text-wrapper-13">2</div>
            <div class="text-wrapper-14">3</div>
            <div class="text-wrapper-15">4</div>
            <div class="text-wrapper-16">5</div>
            <div class="text-wrapper-17">6</div>
            <div class="text-wrapper-18">7</div>
            <div class="text-wrapper-19">8</div>
            <div class="text-wrapper-20">9</div>
            <div class="text-wrapper-21">Current:</div>
            <div class="text-wrapper-22">Estimated End:</div>
            <div class="text-wrapper-23">2</div>
            <div class="text-wrapper-24">3</div>
          </div>
          <div class="overlap-5"><div class="text-wrapper-25">Applied Research</div></div>
          <div class="overlap-6"><div class="text-wrapper-26">Development</div></div>
          <div class="demo-test-wrapper"><div class="demo-test">Demo &amp; Test</div></div>
          <div class="text-wrapper-27">Project Duration</div>
          <div class="text-wrapper-28">Start:</div>
          <div class="text-wrapper-29">Mission Type</div>
          <p class="text-wrapper-30">Drass mission type defined here.</p>
          <div class="text-wrapper-31">Found Source</div>
          <p class="text-wrapper-32">T220 Found Source Name to be found here.</p>
          <div class="text-wrapper-33">Technology Maturity (TRL)</div>
          <div class="text-wrapper-34">Technology Areas</div>
          <div class="text-wrapper-35">Start:</div>
          <div class="text-wrapper-36">TX01 Propulsion Systems</div>
          <div class="text-wrapper-37">Project target</div>
          <div class="text-wrapper-38">Earth</div>
          <div class="text-wrapper-39">TX01.1 Chemical Space Propulsion</div>
          <div class="text-wrapper-40">24 Jan</div>
          <div class="text-wrapper-41">2</div>
          <div class="text-wrapper-42">End:</div>
          <div class="text-wrapper-43">24 July</div>
          <div class="text-wrapper-44">Project</div>
          <div class="text-wrapper-45">Space technology Research Grant</div>
          <p class="text-wrapper-46">
            Considerable design work has been devoted to the development of cryogenic liquid storage containers.
            Containers which hold cryogenic liquids such as liquid nitrogen, oxygen, hydrogen, etc. often are double
            walled vacuum insulated or super insulation flasks, bottles or tanks. Vessels so designed for space
            applications have the lowest cryogen evaporation rates of any available, but research is ongoing to render
            these containers less permeable to heat flux. We propose a different approach to increasing the cryogenic
            liquid hold time. We propose increasing the heat needed to drive off the cryogenic liquid by fundamentally
            changing the heat needed to cause evaporation of the cryogenic liquid. Our unique approach should not be
            confused with technology developed to support cryogens during shipping or other mechanical gyrations,
            exploits the unique physics and chemistry of nanomaterials and their interaction with the cryogenic liquid.
            Successful development of the proposed technology will result in longer hold times, decreased payload mass,
            lower volume, increased safety and decreased energy utilization.
          </p>
          <p class="text-wrapper-47">
            Considerable design work has been devoted to the development of cryogenic liquid storage containers.
            Containers which hold cryogenic liquids such as liquid nitrogen, oxygen, hydrogen, etc. often are double
            walled vacuum insulated or super insulation flasks, bottles or tanks.
          </p>
          <div class="group-2">
            <img class="line" src="img/rectangle.jpg" /> <img class="img" src="img/line-21.svg" />
          </div>
          <div class="text-wrapper-48">TX01.1.3 Cryogenic</div>
          <div class="group-3">
            <img class="line" src="img/image.svg" /> <img class="img" src="img/line-21-2.svg" />
          </div>
          <div class="table">
            <div class="overlap-7">
              <div class="rectangle-2"></div>
              <div class="rectangle-3"></div>
              <div class="rectangle-4"></div>
              <div class="text-wrapper-49">Organisation Performing Work</div>
              <div class="text-wrapper-50">Code</div>
              <div class="text-wrapper-51">Location</div>
              <div class="text-wrapper-52">Description</div>
              <div class="text-wrapper-53">State University Main Campus</div>
              <div class="text-wrapper-54">23044</div>
              <div class="text-wrapper-55">Houston, Texas</div>
              <p class="this-organisation-is">This Organisation is<br />responisble for Project Finance</p>
              <div class="text-wrapper-56">State University Main Campus</div>
              <div class="text-wrapper-57">23044</div>
              <div class="text-wrapper-58">Houston, Texas</div>
              <p class="this-organisation-is-2">This Organisation is<br />responisble for Project Finance</p>
              <img class="line-2" src="img/line-17.svg" />
              <img class="line-3" src="img/line-18.svg" />
              <img class="line-4" src="img/line-19.svg" />
            </div>
          </div>
          <div class="group-4">
            <img class="vector" src="img/vector-1.svg" /> <img class="vector-2" src="img/vector-2.svg" />
          </div>
        </div>
        <div class="text-wrapper-59">Underwater Technology</div>
        <img class="DRASS" src="img/DRASS-1.png" />
      </div>
    </div>
  </body>
</html>
