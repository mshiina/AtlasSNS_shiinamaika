        <div id="head">
            <h1><a href="top"><img src="images/atlas.png"></a></h1>
            <div id="">
                <div id="">
                    <p>{{Auth::user()->username}}さん</p>
                    <img src="{{session('icon_image')}}" >
                </div>
                <ul>
                    <li><a href="top">ホーム</a></li>
                    <li><a href="profile">プロフィール編集</a></li>
                    <li><a href="logout">ログアウト</a></li>
                </ul>
            </div>
        </div>
