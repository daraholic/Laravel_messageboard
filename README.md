# 留言板

## topic
今天上課心得
讓同學在留言版討論

## 環境
macbook本機 php 7.4.29
framework:laravel 8.83.14
db:mysql
server:apache

## git 
git flow(master,develop,feature)

## 功能
顯示資料
新增留言
編輯留言
刪除留言

![](https://i.imgur.com/51FVRTM.png)

## 資料表規劃

| name   | type     |default  |A_I       |note      |
| -------| -------- | --------| -------- | -------- |
| id     | int(11)  |         | yes      |流水號     |
| name   |varchar(11)|        |          |留言者     |
| message|text      |         |          |內容       |
| time   |time      |         |          |時間       |


