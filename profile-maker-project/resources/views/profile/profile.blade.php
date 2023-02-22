<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>プレビュー</title>
  </head>
  <body class="profile-body">
    <section class="page">
			<table>
				<colgroup>
					<col style="width:2%;">
					<col style="width:9%;">
					<col style="width:12%;">
					<col style="width:17%;">
					<col style="width:15%;">
          <col style="width:15%;">
          <col style="width:10%;">
          <col style="width:20%;">
				</colgroup>
        <tbody>
          <tr class="profile-row">
            <td class="center" style="font-size:1.5rem; font-weight: bold;" colspan="8">スキルシート</td>
          </tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2">ふりがな</td>
            <td class="bd-t-s bd-l-s bd-r-s" colspan="2" id="name-furigana"></td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">性別</td>
            <td class="bd-t-s bd-l-s bd-r-s" id="gender"></td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">年齢</td>
            <td class="bd-t-s bd-l-s bd-r-s" id="age"></td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2">氏名</td>
            <td class="bd-t-s bd-l-s bd-r-s" colspan="2" id="name"></td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">路線</td>
            <td class="bd-t-s bd-l-s bd-r-s" id="route"></td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">最寄駅</td>
            <td class="bd-t-s bd-l-s bd-r-s" id="near-station"></td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2" rowspan="4">資格</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">年月</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="5">名称</td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-1"></td>
            <td class="bd-t-s bd-l-s bd-r-s" id="license-name-1" colspan="5"></td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-2"></td>
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-2" colspan="5"></td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-3"></td>
            <td class="bd-t-s bd-l-s bd-r-s" id="license-year-3" colspan="5"></td>
          </tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s center blue"colspan="2" rowspan="2">経験・知識</td>
            <td class="bd-t-s bd-l-s bd-r-s" colspan="6" rowspan="2" valign="top" id="knowledge"></td>
          </tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue" colspan="2" rowspan="2">自己PR</td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s" colspan="6" rowspan="2" valign="top" id="pr"></td>
          </tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row">
            <td class="bd-t-s bd-l-s bd-r-s blue" style="font-size: 5px; padding: 0;">No.</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">年月</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">業種/職種</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="4">業務内容</td>
            <td class="bd-t-s bd-l-s bd-r-s center blue">ツール類</td>
          </tr>
          <tr class="profile-row history-row">
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue index" style="font-size: 5px; padding: 0;" rowspan="3">1</td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s year" rowspan="3"></td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s kind" rowspan="3"></td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s value" colspan="4" rowspan="3" valign="top"></td>
            <td class="bd-t-s bd-l-s bd-r-s bd-b-s tips" rowspan="3" valign="top"></td>
          </tr>
          <tr class="profile-row"></tr>
          <tr class="profile-row"></tr>
        </tbody>
      </table>
    </section>
		<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- js -->
    <script type="text/javascript">
      // 画面表示時にローカルストレージからデータを取得
      $(() => {
				$("#name").text(localStorage.getItem('name'));
				$("#name-furigana").text(localStorage.getItem('name-furigana'));
				$("#gender").text(localStorage.getItem('gender'));
        $("#age").text(localStorage.getItem('age'));
        $("#route").text(localStorage.getItem('route'));
        $("#near-station").text(localStorage.getItem('near-station'));

        $("#license-year-1").text(localStorage.getItem('license-year-1'));
        $("#license-name-1").text(localStorage.getItem('license-name-1'));
        $("#license-year-2").text(localStorage.getItem('license-year-2'));
        $("#license-name-2").text(localStorage.getItem('license-name-2'));
        $("#license-year-3").text(localStorage.getItem('license-year-3'));
        $("#license-name-3").text(localStorage.getItem('license-name-3'));

        $("#knowledge").text(localStorage.getItem('knowledge'));
        $("#pr").text(localStorage.getItem('pr'));
        
        // 配列文字列データをエンコードして該当部分のDOMを生成
        const histories = JSON.parse(localStorage.getItem('histories'));
        histories.forEach((element, index) => {
          // 一つ目のみ記述されているDOMにデータを描写
          if(index === 0){
            let historyRow = $('.history-row');
            historyRow[0].querySelector('.index').textContent = index + 1;
            historyRow[0].querySelector('.year').textContent = element.year;
            historyRow[0].querySelector('.kind').textContent = element.kind;
            historyRow[0].querySelector('.value').textContent = element.value;
            historyRow[0].querySelector('.tips').textContent = element.tips;
            return;
          }
          let e = $('.history-row').clone(true);
          e[0].querySelector('.index').textContent = index + 1;
          e[0].querySelector('.year').textContent = element.year;
          e[0].querySelector('.kind').textContent = element.kind;
          e[0].querySelector('.value').textContent = element.value;
          e[0].querySelector('.tips').textContent = element.tips;
          $('tbody').parent().append(e[0]);
          $('tbody').parent().append('<tr class="profile-row"></tr>');
          $('tbody').parent().append('<tr class="profile-row"></tr>');
        })
      })
    </script>
  </body>
</html>