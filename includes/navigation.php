<body>
    <div id="vulture"><!-- Flying vulture --></div>
    <div id="wrapper" class="group">
        <header class="group">
            <?php 
            echo '
            <nav>
                <ul>';
                    if ($this_page == "home"){
                        echo '
                    <li class="button1" id="active"><a href="/">Home</a></li>';
                    }else{
                        echo '
                    <li class="button1"><a href="http://cactiness.com/">Home</a></li>';
                    }
                    if ($this_page == "fun"){
                        echo '
                    <li class="button2" id="active"><a href="/fun/" accesskey="2">Fun</a></li>';
                    }else{
                        echo '
                    <li class="button2"><a href="/fun/" accesskey="2">Fun</a></li>';
                    }
                    if ($this_page == "facts"){
                        echo '
                    <li class="button3" id="active"><a href="/facts/" accesskey="3">Facts</a></li>';
                    }else{
                        echo '
                    <li class="button3"><a href="/facts/" accesskey="3">Facts</a></li>';
                    }
                    if ($this_page == "tips"){
                        echo '
                    <li class="button4" id="active"><a href="/tips/" accesskey="4">Tips</a></li>';
                    }else{
                        echo '
                    <li class="button4"><a href="/tips/" accesskey="4">Tips</a></li>';
                    }
                    if ($this_page == "uses"){
                        echo '
                    <li class="button5" id="active"><a href="/uses/" accesskey="5">Uses</a></li>';
                    }else{
                        echo '
                    <li class="button5"><a href="/uses/" accesskey="5">Uses</a></li>';
                    }
                    if ($this_page == "about"){
                        echo '
                    <li class="button6" id="active"><a href="/about/" accesskey="6">About</a></li>';
                    }else{
                        echo '
                    <li class="button6"><a href="/about/" accesskey="6">About</a></li>';
                    }
                    echo '
                </ul>
            </nav>';
            ?>
        	
            <a id="logo" href="/">cactiness.com</a>
        </header>