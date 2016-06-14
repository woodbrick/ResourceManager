# ResourceManager
一个通过标签来管理资源文件的在线系统

意图通过服务器帮助开发人员管理各种资源文件

功能：
phase1
* [1.新建项目](#1_1)
* [2.新建标签](#1_2)
* [3.链接标签](#1_3)
* [4.进入标签内容](#1_4)
* [5.下载资源目录压缩包](#1_5)
* [6.拖动资源图片自动上传到标签目录](#1_6)
* [7.提交目录文件到SVN/GIT](#1_7)



phase2
* [1.建立页面索引](#2_1)

<h5 id="1_1">新建项目</h5>
  创建一个项目，可以配置SVN地址或者GIT地址，用以提交资源文件，项目名唯一
  
<h5 id="1_2">新建标签</h5>
  为一个项目添加标签，每个标签分两部分：
  项目引用名:用来组成资源文件名,是英文名，b.描述名:描述名用来标记标签的作用，是中文名

<h5 id="1_3">链接标签</h5>
  将各个标签组合起来成为一个有层次的文件目录，连接好标签后，请求的文件会提交到SVN对应的目录
  
<h5 id="1_4">进入标签内容</h5>
  可以查看已有标签组合，并且点击进入目录。
  映射SVN或GIT目录，标签组合和仓库目录不符，则进入发布请求流程
  
<h5 id="1_5">下载资源目录压缩包</h5>
  可以查看已有标签组合，并且点击组合边上的下载按钮下载资源压缩文件。
  
<h5 id="1_6">拖动资源图片自动上传到标签目录</h5>
  对于被请求端，可以打开一个请求，将资源文件拖入上传框中，如果是图片文件，可以自动缩放成三个尺寸（对于安卓，IOS的标准尺寸，大尺寸，超大尺寸），点击确认


<h5 id="1_7">提交目录文件到SVN/GIT</h5>
  点击确认完成此请求，提交上传文件到仓库对于目录（根据标签组合）
  
<h5 id="2_1">建立索引</h5>
  页面名称是一种特殊的标签，不作为目录结构，但是可以生成页面资源索引，用户点击一个页面标签，会显示该页面有关的所有资源
  
