##資管3B 小組名稱: 房祖名
小組成員:
=====================
|學號|姓名|分配工作|
|------|-----|-----|
|9924064| **李定輝**||
|0124120|**陳泓佑**||
|0124074|**曾偉誌**||
|0124052|**高緯紘**||
|0124050| **林建志**||

專題題目:敨宅美食網
================================
敨宅美食網是一個美食介紹公司，專門幫忙收集訂單給一些美食產業，但敨宅美食網沒有經過電腦化作業，隨著時代演變，手機資訊網路越來越發達，使得敨宅美食網想要利用網路資訊來整理訂單自動化，所以我們這組要協助敨宅美食網建置電腦化作業，以下先行說明這個系統的基本需求。

敨宅美食網介紹管理系統基本需求描述
敨宅美食網需要一個管理系統，包括先行建立客戶基本資料，提供美食資訊。當接獲客戶訂單後，上傳給廠商製作，接單之處理進度需即刻回應客戶。

利害關係人目標表:
========================
<table>
  <tr>
    <td>利害關係人</td>
    <td>目標</td>
  </tr>
  <tr>
      <td><p >總經理</p></td>
      <td><p >1.正確即時地記錄銷售與訂單。</p>
        <p >2.進行短期及長期銷售分析。</p>
        <p >3.進行退貨分析。</p></td>
    </tr>
    <tr>
      <td><p >行銷規劃人員</p></td>
      <td><p >1.能夠分析暢銷產品特性。</p>
        <p >2.與其他廠商進行價格比對。</p>
        <p >3.進行客戶分析。</p></td>
    </tr>
    <tr>
      <td><p >會計人員</p></td>
      <td><p >1.縮短交易時間，加快收帳作業。 </p>
        <p >2.精準的退貨作業。</p></td>
    </tr>
    <tr>
      <td><p >業務人員<br>(網站管理人員)</p></td>
      <td><p >1.能夠正確紀錄客戶與銷售資料。 </p>
        <p >2.能夠進行出貨預測。</p>
         <p >3.能夠查詢未上市美食上市日期。</p></td>   
    </tr>
    <tr>
      <td><p >員工</p></td>
      <td><p >1.加快交貨作業。 </p>
        <p >2.更方便處理退貨作業。</p></td>
    </tr>
  </table>

  
事件與使用案例表:
========================
|事件名稱|使用案例名稱|
|------------------------------------------------------|------------------------|
|1、能夠對所有會員基本資料進行建立、查詢、更改及刪除 。| 1、會員基本資料作業 。 |
|2、能夠根據客戶行為分析判斷發出訂單 。|2、 預測訂單處理作業 。|
|3、審核廠商並更改訂單量 。|3、廠商管理作業 。|
|4、快速查詢產品規格、價格與比對 。|4、價格比對查詢作業 。|
|5、正確紀錄訂單並查詢廠商供應狀態 。| 5、處理訂單紀錄 。|

使用案例圖:
==========================
![](https://raw.githubusercontent.com/w80522e/2014_nkfust_oose_3B_7/master/%E6%A1%88%E4%BE%8B%E5%9C%96.PNG)

使用案例描述:
========================
>>**會員基本資料**

![](https://raw.githubusercontent.com/w80522e/2014_nkfust_oose_3B_7/master/%E7%B6%B2%E7%AB%99%E6%9C%83%E5%93%A1%E8%B3%87%E6%96%99%E5%BB%BA%E7%AB%8B.PNG)

>>**預測訂單處理作業**

![](https://raw.githubusercontent.com/w80522e/2014_nkfust_oose_3B_7/master/%E9%A0%90%E6%B8%AC%E8%A8%82%E5%96%AE%E8%99%95%E7%90%86%E4%BD%9C%E6%A5%AD.PNG)

>>**廠商管理作業**

![](https://raw.githubusercontent.com/w80522e/2014_nkfust_oose_3B_7/master/%E5%BB%A0%E5%95%86%E7%AE%A1%E7%90%86%E4%BD%9C%E6%A5%AD.PNG)

>>**價格比對查詢作業**

![](https://raw.githubusercontent.com/w80522e/2014_nkfust_oose_3B_7/master/%E5%83%B9%E6%A0%BC%E6%AF%94%E5%B0%8D.PNG)

>>**處理訂單紀錄**

![](https://raw.githubusercontent.com/w80522e/2014_nkfust_oose_3B_7/master/%E9%A0%90%E6%B8%AC%E8%A8%82%E5%96%AE%E8%99%95%E7%90%86%E4%BD%9C%E6%A5%AD.PNG)

活動圖:
=============================
![](https://raw.githubusercontent.com/w80522e/2014_nkfust_oose_3B_7/master/0.0..PNG)



統一程序與使用案例之階段:
==========================

<table>
  <tr>
    <td>程序階段</td>
    <td>使用案例</td>
  </tr>
  <tr>
      <td><p >第一階段:</p></td>
      <td><p >1.會員基本資料建立。</p>
        <p >2.美食基本資料建立。</p>
        <p >3.處理訂單紀錄。</p></td>
    </tr>
    <tr>
      <td><p >第二階段:</p></td>
      <td><p >1.出貨作業。</p>
          <p > 2.退貨作業。</p>
        <p >3.處理訂單紀錄。</p></td>
    </tr>
    <tr>
      <td><p >第三階段:</p></td>
      <td><p >1.報表處理作業。</p>
           <p >2.廠商管理作業。</p></td>
    </tr>
    <tr>
      <td><p >第四階段:</p></td>
      <td><p >1.預測訂單處理作業。</p>
        <p > 2.銷售分析作業。</p></td>   
    </tr>
    <tr>
      <td><p >第五階段:</p></td>
      <td><p >1.客戶特性分析作業。</p>
          <p > 2.退貨與訂單分析。</p>
          <p > 3.價格比對查詢作業。</p></td>
    </tr>
  </table>


 
