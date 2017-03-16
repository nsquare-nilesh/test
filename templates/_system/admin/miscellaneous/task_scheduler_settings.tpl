<div class="page-title">
	<h1 class="title">[[Task Scheduler Settings]]</h1>
</div>
<div class="panel panel-default panel--max panel__task-scheduler">
	<p>[[Task Scheduler script performs system tasks such as: user subscriptions expiration, listings expiration and job alerts mailing.]]</p>
	<p>[[To run Task Scheduler manually use the following link:]]<br />
	<a href="{$GLOBALS.user_site_url}/task-scheduler/" target="_blank" class="btn btn--secondary">[[Run Task Scheduler]]</a></p>
	<p>[[To see task scheduler logs use the following link:]]<br />
	<a href="?action=log_view" class="btn btn--secondary">[[View Task Scheduler Log]]</a></p>
	<table class="table table-striped">
		<thead>
			<tr>
				<th colspan="2">[[Task Scheduler Quick Statistics]]</th>
			</tr>
		</thead>
		<tr>
			<td>[[Last Run Date:]]</td>
			<td>{$task_scheduler_log.last_executed_date|date:null:true}</td>
		</tr>
		<tr>
			<td>[[Alerts Sent:]]</td>
			<td>{$task_scheduler_log.notifieds_sent}</td>
		</tr>
		<tr>
			<td>[[Expired Listings:]]</td>
			<td>{$task_scheduler_log.expired_listings}</td>
		</tr>
		<tr>
			<td>[[Expired Users:]]</td>
			<td>{$task_scheduler_log.expired_contracts}</td>
		</tr>
	</table>
	<br>

	<p>[[To make task scheduler run automatically you should configure CRON job to run task scheduler script every day. There are two ways to do that: via command line (e.g. SSH) or via control panel (cPanel, Plesk, H-Shere or whatever). Below you can find the description of each method.]]</p>

	<h3>[[Configuring CRON via cPanel]]</h3>

	<p>
		[[Go to the "<i>Advanced tools -> Cron jobs</i>" section from the cPanel main page. Choose "<i>Standard</i>" level. Enter your email address to the corresponding field in order to get notification when cron job runs. Enter the following text to the "<i> Command to run</i>" field:]]<br />
	<b>wget --tries=1 --timeout=99999 -q -O /dev/null {$GLOBALS.user_site_url}/cron/</b>
	</p>

	<p>
	[[Set "<i>Minute(s)</i>" to "<i>0</i>", "<i>Hour(s)</i>" to "<i>0 = 12 AM/Midnight</i>", "<i>Day(s)</i>" to "<i>Every Day</i>", "<i>Month(s)</i>" to "<i>Every Month</i>", "<i>Weekday(s)</i>" to "<i>Every Weekday</i>". Then click "<i>Save Crontab</i>" button. This cron job will run task scheduler every day at midnight. Notice: Cron job configuration interface may vary depending on control panel software and version used on your hosting server. Review your control panel documentation or contact your hosting provider if you have troubles with configuring cron job on your hosting.]]
	</p>

	<h3>[[Configuring CRON via command line]]</h3>
	<p>
	[[Run the following command in your command line:]]<br />
	<b>crontab -e</b>
	</p>

	<p>
	[[This will open text editor for modifying CRON configuration file. Put the following line there and save:]]<br />
	<b>0  0  *  *  *  wget --tries=1 --timeout=99999 -q -O /dev/null {$GLOBALS.user_site_url}/cron/</b>
	</p>
	<p>[[This will run task scheduler every day in midnight.]]</p>


	<h3>[[Run the script from command line through a PHP interpreter.]]</h3>
	<p>
		[[To run the script you need to enter the following command in the command line:]]<br />
		<b>php cron/index.php</b>
	</p>
	<p>

		[[Your OS can generate a message that this <i>php</i> command is unknown. If you sure that php interpreter is installed correctly in order to solve this issue you can enter the full path to interpreter when you run the script. For example:]]<br />
		<b>/usr/bin/php {$cronPath}</b>
	</p>

	<p>[[For more information about CRON use the following link: ]]<a href="http://en.wikipedia.org/wiki/Cron">[[http://en.wikipedia.org/wiki/Cron]]</a></p>
</div>