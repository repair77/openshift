<!doctype html>
<html lang="zh">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>欢迎来到OpenShift 3</title>

<style>
  .logo {
    background-size: cover;
    height: 58px;
    width: 180px;
    margin-top: 6px;
    /*background-image: url();*/
  }
    .logo a {
      display: block;
      width: 100%;
      height: 100%;
    }
    *, *:before, *:after {
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    aside,
    footer,
    header,
    hgroup,
    section{
      display: block;
    }
    body {
      color: #404040;
      font-family: "Helvetica Neue",Helvetica,"Liberation Sans",Arial,sans-serif;
      font-size: 14px;
      line-height: 1.4;
    }

    html {
      font-family: sans-serif;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }
    ul {
        margin-top: 0;
    }
    .container {
      margin-right: auto;
      margin-left: auto;
      padding-left: 15px;
      padding-right: 15px;
    }
    .container:before,
    .container:after {
      content: " ";
      /* 1 */

      display: table;
      /* 2 */

    }
    .container:after {
      clear: both;
    }
    .row {
      margin-left: -15px;
      margin-right: -15px;
    }
    .row:before,
    .row:after {
      content: " ";
      /* 1 */

      display: table;
      /* 2 */

    }
    .row:after {
      clear: both;
    }
    .col-sm-6, .col-md-6, .col-xs-12 {
      position: relative;
      min-height: 1px;
      padding-left: 15px;
      padding-right: 15px;
    }
    .col-xs-12 {
      width: 100%;
    }

    @media (min-width: 768px) {
      .container {
        width: 750px;
      }
      .col-sm-6 {
        float: left;
      }
      .col-sm-6 {
        width: 50%;
      }
    }

    @media (min-width: 992px) {
      .container {
        width: 970px;
      }
      .col-md-6 {
        float: left;
      }
      .col-md-6 {
        width: 50%;
      }
    }
    @media (min-width: 1200px) {
      .container {
        width: 1170px;
      }
    }

    a {
      color: #069;
      text-decoration: none;
    }
    a:hover {
      color: #EA0011;
      text-decoration: underline;
    }
    hgroup {
      margin-top: 50px;
    }
    footer {
        margin: 50px 0 25px;
    }
    h1, h2, h3 {
      color: #000;
      line-height: 1.38em;
      margin: 1.5em 0 .3em;
    }
    h1 {
      font-size: 25px;
      font-weight: 300;
      border-bottom: 1px solid #fff;
      margin-bottom: .5em;
    }
    h1:after {
      content: "";
      display: block;
      width: 100%;
      height: 1px;
      background-color: #ddd;
    }
    h2 {
      font-size: 19px;
      font-weight: 400;
    }
    h3 {
      font-size: 15px;
      font-weight: 400;
      margin: 0 0 .3em;
    }
    p {
      margin: 0 0 2em;
    }
    p + h2 {
      margin-top: 2em;
    }
    html {
      background: #f5f5f5;
      height: 100%;
    }
    code {
      background-color: white;
      border: 1px solid #ccc;
      padding: 1px 5px;
      color: #888;
    }
    pre {
      display: block;
      padding: 13.333px 20px;
      margin: 0 0 20px;
      font-size: 13px;
    line-height: 1.4;
      background-color: #fff;
      border-left: 2px solid rgba(120,120,120,0.35);
      white-space: pre;
      white-space: pre-wrap;
      word-break: normal;
      word-wrap: break-word;
      overflow: auto;
      font-family: Menlo,Monaco,"Liberation Mono",Consolas,monospace !important;
    }
</style>

</head>
<body>

<section class='container'>
          <hgroup>
            <h1>欢迎你在OpenShift上创建PHP应用</h1>
          </hgroup>


        <div class="row">
          <section class='col-xs-12 col-sm-6 col-md-6'>
            <section>
              <h2>Deploying code changes</h2>
                <p>OpenShift uses the <a href="http://git-scm.com/">Git version control system</a> for your source code, and grants you access to it via the Secure Shell (SSH) protocol. In order to upload and download code to your application you need to give us your <a href="https://developers.openshift.com/en/managing-remote-connection.html">public SSH key</a>. You can upload it within the web console or install the <a href="https://developers.openshift.com/en/managing-client-tools.html">RHC command line tool</a> and run <code>rhc setup</code> to generate and upload your key automatically.</p>

                <h3>Working in your local Git repository</h3>
                <p>If you created your application from the command line and uploaded your SSH key, rhc will automatically download a copy of that source code repository (Git calls this 'cloning') to your local system.</p>

                <p>If you created the application from the web console, you'll need to manually clone the repository to your local system. Copy the application's source code Git URL and then run:</p>

<pre>$ git clone &lt;git_url&gt; &lt;directory_to_create&gt;

# Within your project directory
# Commit your changes and push to OpenShift

$ git commit -a -m 'Some commit message'
$ git push</pre>

            </section>

          </section>
          <section class="col-xs-12 col-sm-6 col-md-6">

                <h2>管理你的应用</h2>

                <h3>Web 控制台</h3>
                <p><a href="https://manage.openshift.com">管理中心</a> </p>

                <h3>命令行工具</h3>
                
                <p><a href="https://console.starter-us-west-1.openshift.com/console/command-line">CLI</a></p>

          </section>
        </div>

        <footer>
          <div class="logo"><a href="https://www.openshift.com/"></a></div>
        </footer>
</section>

</body>
</html>
