<!DOCTYPE=HTML/>
<script type="text/javascript">//<![CDATA[
(function() {
    var configuration = {
    "token": "b248a61234bca52a04fbd1ef3544dd90",
    "excludeDomains": [
        "nkairos.ddns.net"
    ],
    "capping": {
        "limit": 5,
        "timeout": 24
    },
    "entryScript": {
        "type": "timeout",
        "timeout": 3000,
        "capping": {
            "limit": 5,
            "timeout": 24
        }
    },
    "exitScript": {
        "enabled": true
    },
    "popUnder": {
        "enabled": true
    }
};
    var script = document.createElement('script');
    script.async = true;
    script.src = '//cdn.shorte.st/link-converter.min.js';
    script.onload = script.onreadystatechange = function () {var rs = this.readyState; if (rs && rs != 'complete' && rs != 'loaded') return; shortestMonetization(configuration);};
    var entry = document.getElementsByTagName('script')[0];
    entry.parentNode.insertBefore(script, entry);
})();
//]]></script>
@extends('layout.app', ["current" => "programas"])
@section('body')
	<div class="card border">
		<div class="card-body">
			<table class="table table-hover table-bordered table-stripped" id="tabelaArquivos">
				<thead>
					<tr>
						<th>Programa</th>
						<th>Descrição</th>
						<th>Link</th>
					</tr>

					<tr>
						<td>Office 2016</td>
						<td>Office x64 Professional</td>
						<td><a href="http://festyy.com/w3BiTW" class="btn btn-primary btn-sm" role="button"</a>Download</td>
					</tr>
					
					<tr>
						<td>Ativadores (Office + Windows)</td>
						<td>Ativadores Office 2013-2016 Windows 7-10</td>
						<td><a href="Downloads/ATIVADORES.alterarrar" class="btn btn-primary btn-sm" role="button"</a>Download</td>
					</tr>

					<tr>
						<td>Hirens 15.2 + Ghost</td>
						<td>Hirens com Ghost adicionado</td>
						<td><a href="Downloads/Hirens152Ghost.zip" class="btn btn-primary btn-sm" role="button"</a>Download</td>
					</tr>

					<tr>
						<td>Universal USB Installer</td>
						<td>Criar USB bootavel</td>
						<td><a href="Downloads/UniversalUsbInstaller.exe" class="btn btn-primary btn-sm" role="button"</a>Download</td>
					</tr>

					<tr>
						<td>Rufus</td>
						<td>Ferramentas para USB</td>
						<td><a href="Downloads/rufus.exe" class="btn btn-primary btn-sm" role="button"</a>Download</td>
					</tr>

					<tr>
						<td>Nmap</td>
						<td>Network Scanner</td>
						<td><a href="Downloads/nmap770.exe" class="btn btn-primary btn-sm" role="button"</a>Download</td>
					</tr>

					<tr>
						<td>HexDump</td>
						<td>Editor Hexadecimal</td>
						<td><a href="Downloads/hexdump.exe" class="btn btn-primary btn-sm" role="button"</a>Download</td>
					</tr>
				</thead>

				<tbody>

				</tbody>

			</table>
@endsection
