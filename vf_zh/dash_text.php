<?php

$Definition['<strong>Heads Up!</strong> Deleting a role can result in users not having access to the application.'] = '<strong>注意了！</strong> 删除用户角色可能会导致用户无法使用程序。';
$Definition['<strong>Heads Up!</strong> Moving discussions into a replacement category can result in discussions vanishing (or appearing) if the replacement category has different permissions than the category being deleted.'] = '<strong>注意了！</strong>如果话题被移动到的版块与将要被删除的版块有不同的权限设置，这些话题可能会不可见（或本应不可见却被显示出来）。';

$Definition['About.DisableStatistics'] = '如果您因为某些商业原因需要关闭数据报告，您可以在安装配置文件中添加下面这行代码：
 <code>$Configuration[\'Garden\'][\'Analytics\'][\'Enabled\'] = FALSE;</code>';
$Definition['About.VanillaStatistics'] = '为方便我们准确地分析覆盖度和有效性，请不要关闭数据报告。这对开源、免费的 Vanilla 来说相当重要。';
$Definition['AboutCommentEmbedding'] = 'Vanilla 可以用来更换您的博客自身的评论系统。实际上，它可以用来为任何网页添加评论功能。';
$Definition['AboutEmbedding'] = '嵌入技术可以将您的社区或社区的部分功能嵌入到其他应用程序和网页中。';
$Definition['About Vanilla Statistics'] = '关于 Vanilla 统计';
$Definition['Access your community forum by clicking the "Visit Site" link.'] = '点击该页面顶部的“访问网站”链接进入您的社区论坛，或者点击<a href={/,url}>点击此处</a>。当您的用户或客户访问 <a href="{/,url,domain}">{/,url,domain}</a> 的时候就会看到该论坛。';
$Definition['AddonProblems'] = '<h2>遇到问题了？</h2><p>如果有插件出现错误并且网站不能正常使用了，您可以通过编辑这些选项手动禁用它们：</p>%s';
$Definition['All categories listed with a selection of 5 recent discussions under each'] = '各个版块中的最近 5 条话题';
$Definition['Although the invitation was created successfully, the email failed to send. The server reported the following error: %s'] = '邀请已成功创建，但邮件发送失败。服务器返回如下错误信息: %s';
$Definition['ApplicationHelp'] = '应用程序让您可以为网站添加更多功能。<br />当您将应用程序放置到文件夹 %s 后，您可以在这里启用或禁用它。';
$Definition['Are you sure you\'ve entered the correct database host name? Maybe you mistyped it? The database reported: <code>%s</code>'] = '您确定输入了正确的数据库主机地址了吗？或许您写错了？数据库返回信息：<code>%s</code>';
$Definition['A role with default type "unconfirmed" is required to use email confirmation.'] = '需要使用默认类型“未经确认”的角色才能使用电子邮件确认。';

$Definition['By clicking the button below, you will be deleting the user account for %s forever.'] = '点击下面的按钮，您将永久删除账户 %s。';

$Definition['Change the way your community works with plugins.'] = '用插件改进您的社区。我们已经在软件中打包了一些常用的插件，在网上还有更多的插件可供选择。';
$Definition['Check out these tutorials to get started using Vanilla'] = 'Vanilla 是全世界最简洁，最好用的社区平台。它极其容易上手。先看看下面的介绍视频吧。希望您使用愉快。';
$Definition['Choose a role that orphaned users will be assigned to:'] = '选择一个孤立的用户将被分配到的角色：';
$Definition['Choose how to handle all of the content associated with the user account for %s (comments, messages, etc).'] = '选择如何处理用户帐户 %s 相关联的所有内容（包括回复，消息等）。';
$Definition['Choose md5 if you\'re not sure what to choose.'] = '您可以选择自定义的哈希算法处理您的请求。客户端一侧也同样使用哈希算法。如果你不确定该选哪个，请选择 md5。';
$Definition['Continue Import'] = '继续导入';
$Definition['Could not parse import file. The problem is near line %s.'] = '无法解析导入的文件。第 %s 行出错。';
$Definition['Create a localization CSV'] = '创建一个本地化 CSV 文件';

$Definition['Define who can upload files on the Roles & Permissions page.'] = '设置能在 <a href="%s">角色与权限</a> 页面上传及管理文件的用户。';
$Definition['Define your forum homepage, upload your logo, and more...'] = '定义您的论坛首页，上传 Logo，以及其他...';
$Definition['Deleting a role can result in users not having access to the application.'] = '删除一个用户角色，可能会导致用户无法访问应用程序。';
$Definition['Deleting forever cannot be undone.'] = '经常删除无用信息是保持论坛干净的好办法。';
$Definition['Disable Google Sign In'] = '禁用 Google 登录';
$Definition['Disable OpenID'] = '禁用 OpenID';
$Definition['Discussion categories are used to help your users organize their discussions in a way that is meaningful for your community.'] = '话题版块可以帮助您的用户对其话题进行分类，这对社区很重要。';
$Definition['Don\'t embed your forum admin dashboard (pop it out to full-screen)'] = '不要嵌入您的论坛的管理员仪表盘（将其弹出到全屏显示）';
$Definition['Drag and drop the categories below to sort and nest them.'] = '拖动版块进行排序和分级。';

$Definition['EditContentTimeout.Notes'] = '注意：如果用户有权限编写这些内容，这些内容将被覆盖。';
$Definition['Edit Route'] = '编辑路由';
$Definition['Embed your community forum into your website to increase engagement...'] = '将您的社区论坛嵌入你的网站以提升参与度...';
$Definition['Enter a descriptive name.'] = '请输入一个能描述该 Pocket 的名字。这个名字只有在管理 Pocket 时被用到，因此它只是方便您记住这个 Pocket。';
$Definition['Enter a short name for the site.'] = '填写网站的简称，这将显示在登录按钮中。';
$Definition['Enter the address of your Wordpress Blog and we\'ll take it from there.'] = '填写您的 Wordpress 博客地址';
$Definition['Enter the connection settings for your sphinx server below.'] = '在下方填写您的 sphinx 服务器的连接设置';
$Definition['Every edit or deletion is recorded here. Use &lsquo;Restore&rsquo; to undo any change.'] = '这里记录所有编辑和删除，使用“恢复”撤销更改。';
$Definition['Everyone who signs up gets a profile page.'] = '在您社区注册的账户会获得一个公开的个人页面，在那里他们可以上传个人照片，管理他们的个人设置和跟踪社区中正在发生的趣事。您应该<a href="{/profile,url}">现在就定制您的个人资料</a>。';
$Definition['Every user in your site is assigned to at least one role. Roles are used to determine what the users are allowed to do.'] = '网站的每个用户都需要被分配至少一个角色。用户角色决定了用户可以做什么。';

$Definition['Facebook Connect allows users to sign in using their Facebook account.'] = 'Facebook Connect 让用户可以使用 Facebook 账户登录论坛。<b>您必须注册 Facebook 的应用程序才能使用这个插件。</b>';
$Definition['Failed to connect to the database with the username and password you entered. Did you mistype them? The database reported: <code>%s</code>'] = '使用您输入的用户名和密码连接数据库失败。是忘记输入了吗？数据库返回信息：<code>%s</code>';
$Definition['Force the dashboard to only be accessible through this url <em>(not recommended)</em>'] = '设置控制台只能通过这个网址访问<em>（不推荐）</em>';
$Definition['For SEO purposes, search engine crawlers are excluded from being forced to view the forum in the remote url.'] = '为了更好的搜索引擎收录效果，搜索引擎的爬虫不会被强迫通过远程链接访问论坛。';

$Definition['Garden.Import.Complete.Description'] = '成功导入数据。
准备好后请单击<b>完成</b>。';
$Definition['Garden.Import.Continue.Description'] = '该站点正在导入数据。
请选择一项操作：';
$Definition['Garden.Import.InputInstructions'] = '请输入被导入数据中的管理员电子邮件地址与密码。';
$Definition['Garden.StatisticsDisabled'] = '您在您的配置文件中关闭了 Vanilla 统计功能。';
$Definition['Garden.StatisticsLocal.Explain'] = '此论坛可能正在测试环境中运行，或者目前正在使用私有 IP 地址。默认情况下，使用私有 IP 地址的论坛无法被跟踪。';
$Definition['Garden.StatisticsLocal.Resolve'] = '如果你确认你的论坛可以通过公网访问，可以在这里强制发送统计报告：';
$Definition['Garden.StatisticsReadonly.Explain'] = '您的 config.php 文件属性为只读。这意味着 Vanilla 无法自动为您的社区创建安装 ID  和安装密匙。';
$Definition['Garden.StatisticsReadonly.Resolve'] = '设置 conf/config.php 权限为 777 可以解决这个问题。';

$Definition['Heads Up! This is a special role that does not allow active sessions. For this reason, the permission options have been limited to "view" permissions.'] = '注意了！有一个特殊角色不会允许活动的会话。鉴于这种情况，权限设置将被限制为“浏览”。';

$Definition['If a banner logo is uploaded, it will replace the banner title on user-facing forum pages.'] = '上传的站点 Logo 将替换页面的站点名称。';
$Definition['If you want to decrease the warning level then remove a warning.'] = '如果您想降低报警级别，请尝试解决报警的问题。';
$Definition['Import'] = '导入';
$Definition['Importing to Vanilla'] = '导入到 Vanilla 中';
$Definition['Invitations can be sent from users\' profile pages.'] = '当您启用邀请注册后用户将会在他们的个人资料页显示 <a href="%s" class="Popup">我的邀请</a> 链接。';
$Definition['It appears as though the database you specified does not exist yet. Have you created it yet? Did you mistype the name? The database reported: <code>%s</code>'] = '你指定的数据库可能还不存在。你创建完毕了吗？名称输入正确了吗？数据库报告：<code>%s</code>';
$Definition['It is a good idea to keep the maximum number of characters allowed in a comment down to a reasonable size.'] = '设置合理的评论字数上限。';

$Definition['Kick-start your community and increase user engagement.'] = '启动您的社区并增加用户参与度。';

$Definition['Learn about custom routing.'] = '了解自定义路由。';
$Definition['Learn how to completely change your forum\'s look and feel: upload your logo, set your homepage, choose a theme and customize it.'] = '学习如何完全改变您的社区的外观和感觉：上传 Logo；设置首页及布局；选择一个主题并个性化主题。';
$Definition['Learn how to use the basic functionality of your forum.'] = '学习如何使用论坛的基本功能。';
$Definition['Locales allow you to support other languages on your site.'] = '语言选项可以让您的网站支持其他语言。在这里您可以启用或禁用选定的语言。';
$Definition['Locales are in your %s folder.'] = '语言环境设置允许您的网站支持更多语言。当一种新语言被添加到 %s 文件夹中后，您就可以在这里选择启用或禁用它。';
$Definition['LogoDescription'] = '站点 Logo 显示在站点的顶部，有些主题可能不会显示。';

$Definition['Make sure you click View Page'] = '点击<a href="%s">这里</a>预览版块页面。';
$Definition['Manage Routes'] = '管理路由';
$Definition['Marking things as NOT spam will put them back in your forum.'] = '标记为不是垃圾信息的条目会被恢复到论坛中。';
$Definition['Marking things as not spam will put them back in your forum.'] = '标记为不是垃圾信息的条目会被恢复到论坛中。';
$Definition['Messages can appear anywhere in your application.'] = '消息系统在应用中的许多地方被用到，它可以用来向用户发布通知和新闻。在这里，您可以自由地拖动、管理您的消息。';

$Definition['Notify me when people comment on my addons.'] = '当有人评论我的扩展时通知我。';
$Definition['No unconfirmed role available for email confirmation.'] = '该网站需要使用默认类型“未经确认”的角色才能使用电子邮件确认。请添加一个启用此设置。';

$Definition['Please choose an authenticator to configure.'] = '请选择一个身份验证配置。';
$Definition['PluginHelp'] = '插件可以为您的网站添加更多功能。<br />当一个新插件被添加到 %s 文件夹中后，您就可以在这里选择启用或关闭它。';
$Definition['Pockets.BetweenDiscussions.Description'] = 'Pocket 会显示在主话题列表中的各个话题之间。由于话题通常都在 &lt;li&gt;..&lt;/li&gt; 标记当中，因此你也需要将 Pocket 放在这些标记当中。';
$Definition['Pockets allow you to add free-form HTML to various places around the application.'] = 'Pocket 允许你在应用中的多个地方自由添加 HTML 代码。';
$Definition['Prevent spam on your forum by limiting the number of discussions &amp; comments that users can post within a given period of time.'] = '限制用户一定时间内的话题和回复数可以防止垃圾信息。';

$Definition['Quick-Start Guide to Creating Themes for Vanilla'] = '快速创建 Vanilla 主题教程';

$Definition['Ready-made Vanilla Comments Plugin for WordPress'] = '已有的用于 Wordpress 的 Vanilla 评论插件';
$Definition['Ready-made Vanilla Forum Plugin for WordPress'] = '已有的用于 Wordpress 的 Vanilla 论坛插件';
$Definition['Realtime progress bars: %s'] = '实时进度条：%s';
$Definition['Restoring your selection removes the items from this list.'] = '当您选择恢复，这些条目将从此删除并恢复到社区中。';
$Definition['Route Expression'] = '路由展示';
$Definition['Routes are used to redirect users.'] = '使用路由功能来重定向用户请求的网址。';

$Definition['Search for users by name or enter the name of a role to see all users with that role.'] = '按用户名搜索，或输入角色查看所有相应用户。';
$Definition['Select the import source'] = '选择导入源文件';
$Definition['Serialized column "%s" failed to be unserialized.'] = '已序列化的列 "%s" 恢复失败。';
$Definition['Show all possible pocket locations.'] = '打开此选项以显示所有可放置 Pocket 的位置。开启后只有具备管理 Pocket 权限的用户可以看到这些位置。';
$Definition['Spend a little time thinking about how you describe your site here.'] = '花些时间思考一下如何描述您的网站。为您的网站选择一个有意义的名字和简明的描述，这会非常有益于提高网站在搜索引擎中的排名。';
$Definition['Spruce up your emails by adding a logo and customizing the colors.'] = '在电子邮件中添加 Logo 和自定义颜色。';
$Definition['Start Import'] = '开始导入';
$Definition['Start the first discussion.'] = '现在就通过<a href="{/post/discussion,url}">开始第一个话题</a>来让您的社区活跃起来吧。';

$Definition['The %s Authenticator does not have any custom configuration options.'] = '%s 验证器没有任何自定义配置选项。';
$Definition['The addon could not be enabled because it generated a fatal error: <pre>%s</pre>'] = '以下错误导致插件启用失败：<pre>%s</pre>';
$Definition['The addon has already been downloaded.'] = '该扩展已被下载。';
$Definition['The banner logo appears at the top of your forum.'] = '站点 Logo 将显示在论坛顶部';
$Definition['The banner title appears on the top-left of every page.'] = '网站标题显示在每个页面的左上角。';
$Definition['The banner title appears on your site\'s banner and in your browser\'s title bar.'] = '标题内容显示在网站的标题栏和浏览器的标题栏。长度不应超过20字符。如果您上传了 Logo，那么在论坛页面中它将取代标题内容。同时，请注意某些主题可能屏蔽此处的标题内容。';
$Definition['The basic registration form requires new users to copy text from a CAPTCHA image.'] = '<strong>基本注册表单要求</strong>新用户根据验证码图片的内容输入对应的文字，来避免恶意注册和垃圾信息。要使用该功能，您需要有一个 <a href="http://recaptcha.net/">recaptcha.net</a> 账户。注册是免费的而且很容易。注册完毕后，请回到这里并输入以下设置：';
$Definition['The database user you specified does not have permission to access the database. Have you created the database yet? The database reported: <code>%s</code>'] = '您指定的数据库用户没有该数据库的访问权限。您已经创建数据库了吗？数据库报告：<code>%s</code>';
$Definition['The following structure changes are required for your database.'] = '您的数据库结构需要以下改动。';
$Definition['The import file does not contain any data.'] = '导入的文件不包含任何数据。';
$Definition['The import file is not in the correct format.'] = '导入的文件格式不正确。';
$Definition['The location of the jsonp formatted authentication data.'] = '保存 jsonp 格式认证信息的地方。';
$Definition['ThemeHelp'] = '主题功能允许您自由地更换网站的样式和风格。将主题包放置在 %s 文件夹下，您就能在后台看到该主题和启用它的选项。';
$Definition['The Password Authenticator does not have any custom configuration options. '] = '密码认证器不提供任何配置选项。';
$Definition['There are no database structure changes required. There may, however, be data changes.'] = '数据库结构不会有变动，但是数据库中的数据可能会有变化。';
$Definition['The route was saved successfully.'] = '路由保存成功。';
$Definition['The text of the pocket.'] = '请输入 Pocket 中的文本。请确认输入合法的 HTML 代码，以便正确显示。';
$Definition['The user table was not in the import file.'] = '导入的文件中不存在用户表。';
$Definition['The Vanilla 2 Exporter'] = 'Vanilla 2 导入工具';
$Definition['The Vanilla Statistics plugin turns your forum\'s dashboard into an analytics reporting tool'] = 'Vanilla 统计可以将您的论坛控制面板变成报告分析工具，以便查看任何时间段内论坛的活动。你可以在我们的文档库中<a href="http://vanillaforums.org/docs/vanillastatistics">查看更多关于 Vanilla 统计的内容</a>。';
$Definition['This is the administrative dashboard for your new community.'] = '这是您新社区的管理控制面板。在边上您可以找到配置选项。在那里您能够配置您社区的工作方式。<b>默认情况下，只有具有“管理员”角色的用户才能看见您社区的这部分内容。</b>';
$Definition['This option shows/hides the locations where pockets can go.'] = '这个选项会显示或隐藏 Pocket 可以放置的位置，但只有具备添加或编辑 Pocket 权限的用户才能看到。您可以尝试显示这些位置，之后再访问您的站点。';
$Definition['To embed your Vanilla forum into your web site, use the following code.'] = '使用以下代码将 Vanilla 论坛嵌入您的站点。';
$Definition['Too many addresses! We\'ll send up to %s addresses at once.'] = '地址太多了！我们一次最多发送 %s 个地址。';
$Definition['To prevent abuse, some tools automatically hide content and list it here until it is manually approved by a moderator.'] = '为了屏蔽垃圾内容，有些工具会自动隐藏内容并将其罗列在这里，直到被管理员人工批准后才会正常显示出来。';
$Definition['Twitter Connect allows users to sign in using their Twitter account.'] = 'Twitter 连接允许用户使用他们的 Twitter 帐户来登录论坛。<b>您必须在 Twitter 中注册您的应用程序才能使此插件正常工作。</b>';

$Definition['Use the plugin for WordPress or our universal code for any other platform'] = '使用 WordPress 插件为您的博客启用 Vanilla 评论系统，或者使用通用代码为任何其他平台启用 Vanilla 评论系统。';

$Definition['Vanilla Export: %s, Source: %s'] = 'Vanilla 导出：%s，源：%s';
$Definition['Vanilla Statistics are currently disabled'] = 'Vanilla 统计已停用';
$Definition['Video tutorial on advanced settings'] = '高级设置视频教程';
$Definition['Video tutorial on finding &amp; managing users'] = '关于查找与管理用户的视频教程';
$Definition['Video tutorial on managing appearance'] = '关于外观管理的视频教程';
$Definition['Video tutorial on managing categories'] = '管理版块视频教程';
$Definition['Video tutorial on managing roles &amp; permissions'] = '关于管理用户角色与权限的视频教程';
$Definition['Video tutorial on user registration'] = '用户注册视频教程';

$Definition['Warning: Loading tables can be slow.'] = '<b>警告</b>：您的服务器配置不支持快速数据加载。
如果您导入一个非常大的文件（例如超过 200,000 条评论），您可能要考虑更改您的配置。点击<a href="http://vanillaforums.com/porter">这里</a>了解更多信息。';
$Definition['Warning: This is for advanced users.'] = '<b>警告</b>：此功能仅供高级用户使用，并要求你对 web 服务器做额外的配置。通常仅当您使用专门的服务器或 VPS 主机时有效。如果您不了解正在做什么，请不要轻易尝试。';

$Definition['You can connect to multiple sites that support jsConnect.'] = '你可以连接多个支持 jsConnect 的站点。';
$Definition['You can place files in your /uploads folder.'] = '如果您要上传到此页面的文件太大，您可以直接把它放在 /uploads 文件夹。确保文件名以 <b>export</b> 开头，并且结尾为 <b>.txt, .gz</b>。';
$Definition['You must select a file to import.'] = '您必须选择一个要导入的文件。';
