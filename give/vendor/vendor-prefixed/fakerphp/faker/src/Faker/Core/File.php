<?php
/**
 * @license MIT
 *
 * Modified by impress-org on 07-October-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Give\Vendors\Faker\Core;

use Give\Vendors\Faker\Extension;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class File implements Extension\FileExtension
{
    /**
     * MIME types from the apache.org file. Some types are truncated.
     *
     * @var array Map of MIME types => file extension(s)
     *
     * @see http://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types
     */
    private $mimeTypes = [
        'application/atom+xml' => 'atom',
        'application/ecmascript' => 'ecma',
        'application/emma+xml' => 'emma',
        'application/epub+zip' => 'epub',
        'application/java-archive' => 'jar',
        'application/java-vm' => 'class',
        'application/javascript' => 'js',
        'application/json' => 'json',
        'application/jsonml+json' => 'jsonml',
        'application/lost+xml' => 'lostxml',
        'application/mathml+xml' => 'mathml',
        'application/mets+xml' => 'mets',
        'application/mods+xml' => 'mods',
        'application/mp4' => 'mp4s',
        'application/msword' => ['doc', 'dot'],
        'application/octet-stream' => [
            'bin',
            'dms',
            'lrf',
            'mar',
            'so',
            'dist',
            'distz',
            'pkg',
            'bpk',
            'dump',
            'elc',
            'deploy',
        ],
        'application/ogg' => 'ogx',
        'application/omdoc+xml' => 'omdoc',
        'application/pdf' => 'pdf',
        'application/pgp-encrypted' => 'pgp',
        'application/pgp-signature' => ['asc', 'sig'],
        'application/pkix-pkipath' => 'pkipath',
        'application/pkixcmp' => 'pki',
        'application/pls+xml' => 'pls',
        'application/postscript' => ['ai', 'eps', 'ps'],
        'application/pskc+xml' => 'pskcxml',
        'application/rdf+xml' => 'rdf',
        'application/reginfo+xml' => 'rif',
        'application/rss+xml' => 'rss',
        'application/rtf' => 'rtf',
        'application/sbml+xml' => 'sbml',
        'application/vnd.adobe.air-application-installer-package+zip' => 'air',
        'application/vnd.adobe.xdp+xml' => 'xdp',
        'application/vnd.adobe.xfdf' => 'xfdf',
        'application/vnd.ahead.space' => 'ahead',
        'application/vnd.dart' => 'dart',
        'application/vnd.data-vision.rdz' => 'rdz',
        'application/vnd.dece.data' => ['uvf', 'uvvf', 'uvd', 'uvvd'],
        'application/vnd.dece.ttml+xml' => ['uvt', 'uvvt'],
        'application/vnd.dece.unspecified' => ['uvx', 'uvvx'],
        'application/vnd.dece.zip' => ['uvz', 'uvvz'],
        'application/vnd.denovo.fcselayout-link' => 'fe_launch',
        'application/vnd.dna' => 'dna',
        'application/vnd.dolby.mlp' => 'mlp',
        'application/vnd.dpgraph' => 'dpg',
        'application/vnd.dreamfactory' => 'dfac',
        'application/vnd.ds-keypoint' => 'kpxx',
        'application/vnd.dvb.ait' => 'ait',
        'application/vnd.dvb.service' => 'svc',
        'application/vnd.dynageo' => 'geo',
        'application/vnd.ecowin.chart' => 'mag',
        'application/vnd.enliven' => 'nml',
        'application/vnd.epson.esf' => 'esf',
        'application/vnd.epson.msf' => 'msf',
        'application/vnd.epson.quickanime' => 'qam',
        'application/vnd.epson.salt' => 'slt',
        'application/vnd.epson.ssf' => 'ssf',
        'application/vnd.ezpix-album' => 'ez2',
        'application/vnd.ezpix-package' => 'ez3',
        'application/vnd.fdf' => 'fdf',
        'application/vnd.fdsn.mseed' => 'mseed',
        'application/vnd.fdsn.seed' => ['seed', 'dataless'],
        'application/vnd.flographit' => 'gph',
        'application/vnd.fluxtime.clip' => 'ftc',
        'application/vnd.hal+xml' => 'hal',
        'application/vnd.hydrostatix.sof-data' => 'sfd-hdstx',
        'application/vnd.ibm.minipay' => 'mpy',
        'application/vnd.ibm.secure-container' => 'sc',
        'application/vnd.iccprofile' => ['icc', 'icm'],
        'application/vnd.igloader' => 'igl',
        'application/vnd.immervision-ivp' => 'ivp',
        'application/vnd.kde.karbon' => 'karbon',
        'application/vnd.kde.kchart' => 'chrt',
        'application/vnd.kde.kformula' => 'kfo',
        'application/vnd.kde.kivio' => 'flw',
        'application/vnd.kde.kontour' => 'kon',
        'application/vnd.kde.kpresenter' => ['kpr', 'kpt'],
        'application/vnd.kde.kspread' => 'ksp',
        'application/vnd.kde.kword' => ['kwd', 'kwt'],
        'application/vnd.kenameaapp' => 'htke',
        'application/vnd.kidspiration' => 'kia',
        'application/vnd.kinar' => ['kne', 'knp'],
        'application/vnd.koan' => ['skp', 'skd', 'skt', 'skm'],
        'application/vnd.kodak-descriptor' => 'sse',
        'application/vnd.las.las+xml' => 'lasxml',
        'application/vnd.llamagraphics.life-balance.desktop' => 'lbd',
        'application/vnd.llamagraphics.life-balance.exchange+xml' => 'lbe',
        'application/vnd.lotus-1-2-3' => '123',
        'application/vnd.lotus-approach' => 'apr',
        'application/vnd.lotus-freelance' => 'pre',
        'application/vnd.lotus-notes' => 'nsf',
        'application/vnd.lotus-organizer' => 'org',
        'application/vnd.lotus-screencam' => 'scm',
        'application/vnd.mozilla.xul+xml' => 'xul',
        'application/vnd.ms-artgalry' => 'cil',
        'application/vnd.ms-cab-compressed' => 'cab',
        'application/vnd.ms-excel' => [
            'xls',
            'xlm',
            'xla',
            'xlc',
            'xlt',
            'xlw',
        ],
        'application/vnd.ms-excel.addin.macroenabled.12' => 'xlam',
        'application/vnd.ms-excel.sheet.binary.macroenabled.12' => 'xlsb',
        'application/vnd.ms-excel.sheet.macroenabled.12' => 'xlsm',
        'application/vnd.ms-excel.template.macroenabled.12' => 'xltm',
        'application/vnd.ms-fontobject' => 'eot',
        'application/vnd.ms-htmlhelp' => 'chm',
        'application/vnd.ms-ims' => 'ims',
        'application/vnd.ms-lrm' => 'lrm',
        'application/vnd.ms-officetheme' => 'thmx',
        'application/vnd.ms-pki.seccat' => 'cat',
        'application/vnd.ms-pki.stl' => 'stl',
        'application/vnd.ms-powerpoint' => ['ppt', 'pps', 'pot'],
        'application/vnd.ms-powerpoint.addin.macroenabled.12' => 'ppam',
        'application/vnd.ms-powerpoint.presentation.macroenabled.12' => 'pptm',
        'application/vnd.ms-powerpoint.slide.macroenabled.12' => 'sldm',
        'application/vnd.ms-powerpoint.slideshow.macroenabled.12' => 'ppsm',
        'application/vnd.ms-powerpoint.template.macroenabled.12' => 'potm',
        'application/vnd.ms-project' => ['mpp', 'mpt'],
        'application/vnd.ms-word.document.macroenabled.12' => 'docm',
        'application/vnd.ms-word.template.macroenabled.12' => 'dotm',
        'application/vnd.ms-works' => ['wps', 'wks', 'wcm', 'wdb'],
        'application/vnd.ms-wpl' => 'wpl',
        'application/vnd.ms-xpsdocument' => 'xps',
        'application/vnd.mseq' => 'mseq',
        'application/vnd.musician' => 'mus',
        'application/vnd.oasis.opendocument.chart' => 'odc',
        'application/vnd.oasis.opendocument.chart-template' => 'otc',
        'application/vnd.oasis.opendocument.database' => 'odb',
        'application/vnd.oasis.opendocument.formula' => 'odf',
        'application/vnd.oasis.opendocument.formula-template' => 'odft',
        'application/vnd.oasis.opendocument.graphics' => 'odg',
        'application/vnd.oasis.opendocument.graphics-template' => 'otg',
        'application/vnd.oasis.opendocument.image' => 'odi',
        'application/vnd.oasis.opendocument.image-template' => 'oti',
        'application/vnd.oasis.opendocument.presentation' => 'odp',
        'application/vnd.oasis.opendocument.presentation-template' => 'otp',
        'application/vnd.oasis.opendocument.spreadsheet' => 'ods',
        'application/vnd.oasis.opendocument.spreadsheet-template' => 'ots',
        'application/vnd.oasis.opendocument.text' => 'odt',
        'application/vnd.oasis.opendocument.text-master' => 'odm',
        'application/vnd.oasis.opendocument.text-template' => 'ott',
        'application/vnd.oasis.opendocument.text-web' => 'oth',
        'application/vnd.olpc-sugar' => 'xo',
        'application/vnd.oma.dd2+xml' => 'dd2',
        'application/vnd.openofficeorg.extension' => 'oxt',
        'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'pptx',
        'application/vnd.openxmlformats-officedocument.presentationml.slide' => 'sldx',
        'application/vnd.openxmlformats-officedocument.presentationml.slideshow' => 'ppsx',
        'application/vnd.openxmlformats-officedocument.presentationml.template' => 'potx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.template' => 'xltx',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.template' => 'dotx',
        'application/vnd.pvi.ptid1' => 'ptid',
        'application/vnd.quark.quarkxpress' => [
            'qxd',
            'qxt',
            'qwd',
            'qwt',
            'qxl',
            'qxb',
        ],
        'application/vnd.realvnc.bed' => 'bed',
        'application/vnd.recordare.musicxml' => 'mxl',
        'application/vnd.recordare.musicxml+xml' => 'musicxml',
        'application/vnd.rig.cryptonote' => 'cryptonote',
        'application/vnd.rim.cod' => 'cod',
        'application/vnd.rn-realmedia' => 'rm',
        'application/vnd.rn-realmedia-vbr' => 'rmvb',
        'application/vnd.route66.link66+xml' => 'link66',
        'application/vnd.sailingtracker.track' => 'st',
        'application/vnd.seemail' => 'see',
        'application/vnd.sema' => 'sema',
        'application/vnd.semd' => 'semd',
        'application/vnd.semf' => 'semf',
        'application/vnd.shana.informed.formdata' => 'ifm',
        'application/vnd.shana.informed.formtemplate' => 'itp',
        'application/vnd.shana.informed.interchange' => 'iif',
        'application/vnd.shana.informed.package' => 'ipk',
        'application/vnd.simtech-mindmapper' => ['twd', 'twds'],
        'application/vnd.smaf' => 'mmf',
        'application/vnd.stepmania.stepchart' => 'sm',
        'application/vnd.sun.xml.calc' => 'sxc',
        'application/vnd.sun.xml.calc.template' => 'stc',
        'application/vnd.sun.xml.draw' => 'sxd',
        'application/vnd.sun.xml.draw.template' => 'std',
        'application/vnd.sun.xml.impress' => 'sxi',
        'application/vnd.sun.xml.impress.template' => 'sti',
        'application/vnd.sun.xml.math' => 'sxm',
        'application/vnd.sun.xml.writer' => 'sxw',
        'application/vnd.sun.xml.writer.global' => 'sxg',
        'application/vnd.sun.xml.writer.template' => 'stw',
        'application/vnd.sus-calendar' => ['sus', 'susp'],
        'application/vnd.svd' => 'svd',
        'application/vnd.symbian.install' => ['sis', 'sisx'],
        'application/vnd.syncml+xml' => 'xsm',
        'application/vnd.syncml.dm+wbxml' => 'bdm',
        'application/vnd.syncml.dm+xml' => 'xdm',
        'application/vnd.tao.intent-module-archive' => 'tao',
        'application/vnd.tcpdump.pcap' => ['pcap', 'cap', 'dmp'],
        'application/vnd.tmobile-livetv' => 'tmo',
        'application/vnd.trid.tpt' => 'tpt',
        'application/vnd.triscape.mxs' => 'mxs',
        'application/vnd.trueapp' => 'tra',
        'application/vnd.ufdl' => ['ufd', 'ufdl'],
        'application/vnd.uiq.theme' => 'utz',
        'application/vnd.umajin' => 'umj',
        'application/vnd.unity' => 'unityweb',
        'application/vnd.uoml+xml' => 'uoml',
        'application/vnd.vcx' => 'vcx',
        'application/vnd.visio' => ['vsd', 'vst', 'vss', 'vsw'],
        'application/vnd.visionary' => 'vis',
        'application/vnd.vsf' => 'vsf',
        'application/vnd.wap.wbxml' => 'wbxml',
        'application/vnd.wap.wmlc' => 'wmlc',
        'application/vnd.wap.wmlscriptc' => 'wmlsc',
        'application/vnd.webturbo' => 'wtb',
        'application/vnd.wolfram.player' => 'nbp',
        'application/vnd.wordperfect' => 'wpd',
        'application/vnd.wqd' => 'wqd',
        'application/vnd.wt.stf' => 'stf',
        'application/vnd.xara' => 'xar',
        'application/vnd.xfdl' => 'xfdl',
        'application/voicexml+xml' => 'vxml',
        'application/widget' => 'wgt',
        'application/winhlp' => 'hlp',
        'application/wsdl+xml' => 'wsdl',
        'application/wspolicy+xml' => 'wspolicy',
        'application/x-7z-compressed' => '7z',
        'application/x-bittorrent' => 'torrent',
        'application/x-blorb' => ['blb', 'blorb'],
        'application/x-bzip' => 'bz',
        'application/x-cdlink' => 'vcd',
        'application/x-cfs-compressed' => 'cfs',
        'application/x-chat' => 'chat',
        'application/x-chess-pgn' => 'pgn',
        'application/x-conference' => 'nsc',
        'application/x-cpio' => 'cpio',
        'application/x-csh' => 'csh',
        'application/x-debian-package' => ['deb', 'udeb'],
        'application/x-dgc-compressed' => 'dgc',
        'application/x-director' => [
            'dir',
            'dcr',
            'dxr',
            'cst',
            'cct',
            'cxt',
            'w3d',
            'fgd',
            'swa',
        ],
        'application/x-font-ttf' => ['ttf', 'ttc'],
        'application/x-font-type1' => ['pfa', 'pfb', 'pfm', 'afm'],
        'application/x-font-woff' => 'woff',
        'application/x-freearc' => 'arc',
        'application/x-futuresplash' => 'spl',
        'application/x-gca-compressed' => 'gca',
        'application/x-glulx' => 'ulx',
        'application/x-gnumeric' => 'gnumeric',
        'application/x-gramps-xml' => 'gramps',
        'application/x-gtar' => 'gtar',
        'application/x-hdf' => 'hdf',
        'application/x-install-instructions' => 'install',
        'application/x-iso9660-image' => 'iso',
        'application/x-java-jnlp-file' => 'jnlp',
        'application/x-latex' => 'latex',
        'application/x-lzh-compressed' => ['lzh', 'lha'],
        'application/x-mie' => 'mie',
        'application/x-mobipocket-ebook' => ['prc', 'mobi'],
        'application/x-ms-application' => 'application',
        'application/x-ms-shortcut' => 'lnk',
        'application/x-ms-wmd' => 'wmd',
        'application/x-ms-wmz' => 'wmz',
        'application/x-ms-xbap' => 'xbap',
        'application/x-msaccess' => 'mdb',
        'application/x-msbinder' => 'obd',
        'application/x-mscardfile' => 'crd',
        'application/x-msclip' => 'clp',
        'application/x-msdownload' => ['exe', 'dll', 'com', 'bat', 'msi'],
        'application/x-msmediaview' => [
            'mvb',
            'm13',
            'm14',
        ],
        'application/x-msmetafile' => ['wmf', 'wmz', 'emf', 'emz'],
        'application/x-rar-compressed' => 'rar',
        'application/x-research-info-systems' => 'ris',
        'application/x-sh' => 'sh',
        'application/x-shar' => 'shar',
        'application/x-shockwave-flash' => 'swf',
        'application/x-silverlight-app' => 'xap',
        'application/x-sql' => 'sql',
        'application/x-stuffit' => 'sit',
        'application/x-stuffitx' => 'sitx',
        'application/x-subrip' => 'srt',
        'application/x-sv4cpio' => 'sv4cpio',
        'application/x-sv4crc' => 'sv4crc',
        'application/x-t3vm-image' => 't3',
        'application/x-tads' => 'gam',
        'application/x-tar' => 'tar',
        'application/x-tcl' => 'tcl',
        'application/x-tex' => 'tex',
        'application/x-tex-tfm' => 'tfm',
        'application/x-texinfo' => ['texinfo', 'texi'],
        'application/x-tgif' => 'obj',
        'application/x-ustar' => 'ustar',
        'application/x-wais-source' => 'src',
        'application/x-x509-ca-cert' => ['der', 'crt'],
        'application/x-xfig' => 'fig',
        'application/x-xliff+xml' => 'xlf',
        'application/x-xpinstall' => 'xpi',
        'application/x-xz' => 'xz',
        'application/x-zmachine' => 'z1',
        'application/xaml+xml' => 'xaml',
        'application/xcap-diff+xml' => 'xdf',
        'application/xenc+xml' => 'xenc',
        'application/xhtml+xml' => ['xhtml', 'xht'],
        'application/xml' => ['xml', 'xsl'],
        'application/xml-dtd' => 'dtd',
        'application/xop+xml' => 'xop',
        'application/xproc+xml' => 'xpl',
        'application/xslt+xml' => 'xslt',
        'application/xspf+xml' => 'xspf',
        'application/xv+xml' => ['mxml', 'xhvml', 'xvml', 'xvm'],
        'application/yang' => 'yang',
        'application/yin+xml' => 'yin',
        'application/zip' => 'zip',
        'audio/adpcm' => 'adp',
        'audio/basic' => ['au', 'snd'],
        'audio/midi' => ['mid', 'midi', 'kar', 'rmi'],
        'audio/mp4' => 'mp4a',
        'audio/mpeg' => [
            'mpga',
            'mp2',
            'mp2a',
            'mp3',
            'm2a',
            'm3a',
        ],
        'audio/ogg' => ['oga', 'ogg', 'spx'],
        'audio/vnd.dece.audio' => ['uva', 'uvva'],
        'audio/vnd.rip' => 'rip',
        'audio/webm' => 'weba',
        'audio/x-aac' => 'aac',
        'audio/x-aiff' => ['aif', 'aiff', 'aifc'],
        'audio/x-caf' => 'caf',
        'audio/x-flac' => 'flac',
        'audio/x-matroska' => 'mka',
        'audio/x-mpegurl' => 'm3u',
        'audio/x-ms-wax' => 'wax',
        'audio/x-ms-wma' => 'wma',
        'audio/x-pn-realaudio' => ['ram', 'ra'],
        'audio/x-pn-realaudio-plugin' => 'rmp',
        'audio/x-wav' => 'wav',
        'audio/xm' => 'xm',
        'image/bmp' => 'bmp',
        'image/cgm' => 'cgm',
        'image/g3fax' => 'g3',
        'image/gif' => 'gif',
        'image/ief' => 'ief',
        'image/jpeg' => ['jpeg', 'jpg', 'jpe'],
        'image/ktx' => 'ktx',
        'image/png' => 'png',
        'image/prs.btif' => 'btif',
        'image/sgi' => 'sgi',
        'image/svg+xml' => ['svg', 'svgz'],
        'image/tiff' => ['tiff', 'tif'],
        'image/vnd.adobe.photoshop' => 'psd',
        'image/vnd.dece.graphic' => ['uvi', 'uvvi', 'uvg', 'uvvg'],
        'image/vnd.dvb.subtitle' => 'sub',
        'image/vnd.djvu' => ['djvu', 'djv'],
        'image/vnd.dwg' => 'dwg',
        'image/vnd.dxf' => 'dxf',
        'image/vnd.fastbidsheet' => 'fbs',
        'image/vnd.fpx' => 'fpx',
        'image/vnd.fst' => 'fst',
        'image/vnd.fujixerox.edmics-mmr' => 'mmr',
        'image/vnd.fujixerox.edmics-rlc' => 'rlc',
        'image/vnd.ms-modi' => 'mdi',
        'image/vnd.ms-photo' => 'wdp',
        'image/vnd.net-fpx' => 'npx',
        'image/vnd.wap.wbmp' => 'wbmp',
        'image/vnd.xiff' => 'xif',
        'image/webp' => 'webp',
        'image/x-3ds' => '3ds',
        'image/x-cmu-raster' => 'ras',
        'image/x-cmx' => 'cmx',
        'image/x-freehand' => ['fh', 'fhc', 'fh4', 'fh5', 'fh7'],
        'image/x-icon' => 'ico',
        'image/x-mrsid-image' => 'sid',
        'image/x-pcx' => 'pcx',
        'image/x-pict' => ['pic', 'pct'],
        'image/x-portable-anymap' => 'pnm',
        'image/x-portable-bitmap' => 'pbm',
        'image/x-portable-graymap' => 'pgm',
        'image/x-portable-pixmap' => 'ppm',
        'image/x-rgb' => 'rgb',
        'image/x-tga' => 'tga',
        'image/x-xbitmap' => 'xbm',
        'image/x-xpixmap' => 'xpm',
        'image/x-xwindowdump' => 'xwd',
        'message/rfc822' => ['eml', 'mime'],
        'model/iges' => ['igs', 'iges'],
        'model/mesh' => ['msh', 'mesh', 'silo'],
        'model/vnd.collada+xml' => 'dae',
        'model/vnd.dwf' => 'dwf',
        'model/vnd.gdl' => 'gdl',
        'model/vnd.gtw' => 'gtw',
        'model/vnd.mts' => 'mts',
        'model/vnd.vtu' => 'vtu',
        'model/vrml' => ['wrl', 'vrml'],
        'model/x3d+binary' => 'x3db',
        'model/x3d+vrml' => 'x3dv',
        'model/x3d+xml' => 'x3d',
        'text/cache-manifest' => 'appcache',
        'text/calendar' => ['ics', 'ifb'],
        'text/css' => 'css',
        'text/csv' => 'csv',
        'text/html' => ['html', 'htm'],
        'text/n3' => 'n3',
        'text/plain' => [
            'txt',
            'text',
            'conf',
            'def',
            'list',
            'log',
            'in',
        ],
        'text/prs.lines.tag' => 'dsc',
        'text/richtext' => 'rtx',
        'text/sgml' => ['sgml', 'sgm'],
        'text/tab-separated-values' => 'tsv',
        'text/troff' => [
            't',
            'tr',
            'roff',
            'man',
            'me',
            'ms',
        ],
        'text/turtle' => 'ttl',
        'text/uri-list' => ['uri', 'uris', 'urls'],
        'text/vcard' => 'vcard',
        'text/vnd.curl' => 'curl',
        'text/vnd.curl.dcurl' => 'dcurl',
        'text/vnd.curl.scurl' => 'scurl',
        'text/vnd.curl.mcurl' => 'mcurl',
        'text/vnd.dvb.subtitle' => 'sub',
        'text/vnd.fly' => 'fly',
        'text/vnd.fmi.flexstor' => 'flx',
        'text/vnd.graphviz' => 'gv',
        'text/vnd.in3d.3dml' => '3dml',
        'text/vnd.in3d.spot' => 'spot',
        'text/vnd.sun.j2me.app-descriptor' => 'jad',
        'text/vnd.wap.wml' => 'wml',
        'text/vnd.wap.wmlscript' => 'wmls',
        'text/x-asm' => ['s', 'asm'],
        'text/x-fortran' => ['f', 'for', 'f77', 'f90'],
        'text/x-java-source' => 'java',
        'text/x-opml' => 'opml',
        'text/x-pascal' => ['p', 'pas'],
        'text/x-nfo' => 'nfo',
        'text/x-setext' => 'etx',
        'text/x-sfv' => 'sfv',
        'text/x-uuencode' => 'uu',
        'text/x-vcalendar' => 'vcs',
        'text/x-vcard' => 'vcf',
        'video/3gpp' => '3gp',
        'video/3gpp2' => '3g2',
        'video/h261' => 'h261',
        'video/h263' => 'h263',
        'video/h264' => 'h264',
        'video/jpeg' => 'jpgv',
        'video/jpm' => ['jpm', 'jpgm'],
        'video/mj2' => 'mj2',
        'video/mp4' => 'mp4',
        'video/mpeg' => ['mpeg', 'mpg', 'mpe', 'm1v', 'm2v'],
        'video/ogg' => 'ogv',
        'video/quicktime' => ['qt', 'mov'],
        'video/vnd.dece.hd' => ['uvh', 'uvvh'],
        'video/vnd.dece.mobile' => ['uvm', 'uvvm'],
        'video/vnd.dece.pd' => ['uvp', 'uvvp'],
        'video/vnd.dece.sd' => ['uvs', 'uvvs'],
        'video/vnd.dece.video' => ['uvv', 'uvvv'],
        'video/vnd.dvb.file' => 'dvb',
        'video/vnd.fvt' => 'fvt',
        'video/vnd.mpegurl' => ['mxu', 'm4u'],
        'video/vnd.ms-playready.media.pyv' => 'pyv',
        'video/vnd.uvvu.mp4' => ['uvu', 'uvvu'],
        'video/vnd.vivo' => 'viv',
        'video/webm' => 'webm',
        'video/x-f4v' => 'f4v',
        'video/x-fli' => 'fli',
        'video/x-flv' => 'flv',
        'video/x-m4v' => 'm4v',
        'video/x-matroska' => ['mkv', 'mk3d', 'mks'],
        'video/x-mng' => 'mng',
        'video/x-ms-asf' => ['asf', 'asx'],
        'video/x-ms-vob' => 'vob',
        'video/x-ms-wm' => 'wm',
        'video/x-ms-wmv' => 'wmv',
        'video/x-ms-wmx' => 'wmx',
        'video/x-ms-wvx' => 'wvx',
        'video/x-msvideo' => 'avi',
        'video/x-sgi-movie' => 'movie',
    ];

    public function mimeType(): string
    {
        return array_rand($this->mimeTypes, 1);
    }

    public function extension(): string
    {
        $extension = $this->mimeTypes[array_rand($this->mimeTypes, 1)];

        return is_array($extension) ? $extension[array_rand($extension, 1)] : $extension;
    }

    public function filePath(): string
    {
        return tempnam(sys_get_temp_dir(), 'faker');
    }
}
