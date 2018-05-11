<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>SunJun Board Project</title>
    <meta name="keywords" content="자유게시판, 포트폴리오, 협업 프로젝트">
    <meta name="description" content="뱅철햄과 함께하는 게시판 협업 프로젝트">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../common/css/default.css">
    <link rel="stylesheet" href="/board/common/board.css">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Nanum+Gothic+Coding|Nanum+Myeongjo|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
</head>
<body>
   <header id="header">
            <ul class="header_nav">
                <li><a href="http://monster2jy.cafe24.com/"><i class="material-icons">&#xE859;</i></a></li>
                <li><a href="http://monster2jy.cafe24.com/board/door/door.php">Main</a></li>
                <li><a href="">Free Board</a></li>
                <li><a href="">Best Title</a></li>
                <li><a href="">Q &amp; A</a></li>
            </ul>
            <ul class="header_login">
                <li><a href="">About</a></li>
                <li><a href="">Contant us</a></li>
                <li><a href="">Login</a></li>
            </ul>
            <ul class="header_mobile">
                <li><i class="material-icons">dehaze</i></li>
            </ul>
    </header>
    <div id="wrap">
        <section id="main_section">
            <div id="main_nav">
                <ul>
                    <li><a href="">Notice</a></li>
                    <li><a href="">Free Board</a></li>
                    <li><a href="">Q &amp; A</a></li>
                    <li><a href="">Add Board</a></li>
                    <li><a href="">1:1 Chat</a></li>
                    <li><a href="">Live Answer</a></li>
                </ul>
            </div>
            
            <div id="main">
                <div id="main_top">
                    <h1><a href="">Free Board</a></h1>
                </div>
                
                <div id="main_category">
                    <ul class="main_category_ct">
                        <li><a href="">All</a></li>
                        <li><a href="">Category</a></li>
                        <li><a href="">Category</a></li>
                        <li><a href="">Category</a></li>
                        <li><a href="">Category</a></li>
                    </ul>
                    
                    <form action="">
                    <ul class="main_search">
                        <li>
                            <select name="" id="" class="search_control">
                                <option value="제목">Title</option>
                                <option value="작성자">Author</option>
                                <option value="내용">Content</option>
                                <option value="내용+작성자">Content+Author</option>
                            </select>
                        </li>
                        <!---->
                        <li>
                            <div class="mobile_search">
                               <form action="http://monster2jy.cafe24.com/">
                                    <button><i class="material-icons">&#xE254;</i>Write</button>
                                </form>
                            </div>
                        </li>
                        <!---->
                        <li>
                            <input type="search" value="" placeholder="Search Word" class="search_control">
                        </li>
                        <li class="search_control">
                            <i class="material-icons">search</i>
                             <input type="submit" value="search">
                        </li>
                    </ul>
                    </form>
                </div>
                
                <div id="main_info">
                    <div id="main_info_top">
                        <ul>
                            <li>No.</li>
                            <li>Title</li>
                            <li>Author</li>
                            <li>Date</li>
                            <li>Count</li>
                        </ul>    
                    </div>
                    
                    <div id="main_info_middle">
                       <ul>
                           <li>
                               <ul>
                                   <li>121</li>
                                   <li>121</li>
                                   <li>121</li>
                                   <li>121</li>
                                   <li>121</li>
                                   <li>121</li>
                                   <li>121</li>
                                   <li>121</li>
                                   <li>121</li>
                               </ul>
                           </li>
                           <li>
                                <ul>
                                    <li>테스트중입니다.뚝햄 바보</li>
                                    <li>테스트중입니다.준영 짜응</li>
                                    <li>테스트중입니다.</li>
                                    <li>테스트중입니다.</li>
                                    <li>테스트중입니다.</li>
                                    <li>테스트중입니다.</li>
                                    <li>테스트중입니다.</li>
                                    <li>테스트중입니다.</li>
                                    <li>테스트중입니다.</li>
                                </ul>
                           </li>
                           <li>
                               <ul>
                                   <li>admin</li>
                                   <li>admin</li>
                                   <li>admin</li>
                                   <li>admin</li>
                                   <li>admin</li>
                                   <li>admin</li>
                                   <li>admin</li>
                                   <li>admin</li>
                                   <li>admin</li>
                               </ul>
                           </li>
                           <li>
                               <ul>
                                   <li>18.03.20</li>
                                   <li>18.03.20</li>
                                   <li>18.03.20</li>
                                   <li>18.03.20</li>
                                   <li>18.03.20</li>
                                   <li>18.03.20</li>
                                   <li>18.03.20</li>
                                   <li>18.03.20</li>
                                   <li>18.03.20</li>
                               </ul>
                           </li>
                           <li>
                               <ul>
                                   <li>5</li>
                                   <li>5</li>
                                   <li>5</li>
                                   <li>5</li>
                                   <li>5</li>
                                   <li>5</li>
                                   <li>5</li>
                                   <li>5</li>
                                   <li>5</li>
                               </ul>
                           </li>
                       </ul>
                    </div>
                    
                    <div id="main_info_bottom">
                        <div class="main_info_number">
                            <span><i class="material-icons">first_page</i></span>
                            <span><i class="material-icons">navigate_before</i></span>
                            <span>1</span>
                            <span><i class="material-icons">navigate_next</i></span>
                            <span><i class="material-icons">last_page</i></span>
                            <div class="main_info_write">
                               <form action="http://monster2jy.cafe24.com/">
                                    <button><i class="material-icons">&#xE254;</i>Write</button>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
       
    </div>
     <footer>
           <ul>
               <li>Copyright @ JunYeong-Lee All Rights Reserved.  </li>
               <li><a href="">Company</a></li>
               <li><a href="">info</a></li>
               <li><a href=""> access terms</a></li>
               <li><a href=""><strong>Personal Data Poicy</strong></a></li>
               <li><a href="">Welfare</a></li>
               <li><a href="">Used Store</a></li>
           </ul>
           <div id="footer_bottom">
               <div class="footer_address">
                   <p>행복한 우리집 우주로 11 5층~8층(지구빌딩, 태양희망호)</p>
                   <p>대표: 이준영, 선병철 개인정보보호 책임자 : 아무개 abcdef@board.com</p>
                   <p>사업자등록번호 : 229-123-12300 통신판매업신고 제 2018-00320호</p>
                     
               </div>
               <div class="footer_call">
                
               </div>
            </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        
            $('.header_login').click(function(){
                alert('준비중입니다.');
            });
        
    </script>
</body>
</html>