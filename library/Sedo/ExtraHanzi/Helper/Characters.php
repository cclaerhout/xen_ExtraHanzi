<?php
class Sedo_ExtraHanzi_Helper_Characters
{
	//Source: http://www.ogcio.gov.hk/en/business/tech_promotion/ccli/terms/doc/hkscs-2008-cj_unicode.txt ; only unicode with 5 characters
	protected $_extraHanziUnicodeTable = array(
		'20021', '2003E', '20046', '2004E', '20068', '20086', '20087', '2008A', '20094', '200CA',
		'200CB', '200CC', '200CD', '200D1', '200EE', '2010C', '2010E', '20118', '201A4', '201A9',
		'201AB', '201C1', '201D4', '201F2', '20204', '2020C', '20214', '20239', '2025B', '20274',
		'20275', '20299', '2029E', '202A0', '202B7', '202BF', '202C0', '202E5', '2030A', '20325',
		'20341', '20345', '20346', '20347', '2037E', '2037F', '20380', '203A0', '203A7', '203B5',
		'203C9', '203CB', '203F5', '203FC', '20413', '20414', '2041F', '20465', '20487', '2048E',
		'20491', '20492', '204A3', '204D7', '204FC', '204FE', '20547', '2058E', '205A5', '205B3',
		'205C3', '205CA', '205D0', '205D5', '205DF', '205E0', '205EB', '20611', '20615', '20619',
		'2061A', '20630', '20656', '20676', '2070E', '20731', '20779', '2082C', '20873', '208D5',
		'20916', '20923', '20954', '20979', '209E7', '20A11', '20A50', '20A6F', '20A8A', '20AB4',
		'20AC2', '20ACD', '20B0D', '20B8F', '20B9F', '20BA8', '20BA9', '20BBF', '20BC6', '20BCB',
		'20BE2', '20BEB', '20BFB', '20BFF', '20C0B', '20C0D', '20C20', '20C34', '20C3A', '20C3B',
		'20C41', '20C42', '20C43', '20C53', '20C65', '20C77', '20C78', '20C7C', '20C8D', '20C96',
		'20C9C', '20CB5', '20CB8', '20CCF', '20CD3', '20CD4', '20CD5', '20CD6', '20CDD', '20CED',
		'20CFF', '20D15', '20D28', '20D31', '20D32', '20D46', '20D47', '20D48', '20D49', '20D4C',
		'20D4D', '20D4E', '20D6F', '20D71', '20D74', '20D7C', '20D7E', '20D7F', '20D96', '20D9C',
		'20DA7', '20DB2', '20DC8', '20E04', '20E09', '20E0A', '20E0D', '20E0E', '20E0F', '20E10',
		'20E11', '20E16', '20E1D', '20E4C', '20E6D', '20E73', '20E75', '20E76', '20E77', '20E78',
		'20E79', '20E7A', '20E7B', '20E8C', '20E96', '20E98', '20E9D', '20EA2', '20EAA', '20EAB',
		'20EAC', '20EB6', '20ED7', '20ED8', '20EDD', '20EF8', '20EF9', '20EFA', '20EFB', '20F1D',
		'20F26', '20F2D', '20F2E', '20F30', '20F31', '20F3B', '20F4C', '20F64', '20F8D', '20F90',
		'20FAD', '20FB4', '20FB5', '20FB6', '20FBC', '20FDF', '20FEA', '20FEB', '20FEC', '20FED',
		'21014', '2101D', '2101E', '2104F', '2105C', '2106F', '21075', '21076', '21077', '21078',
		'2107B', '21088', '21096', '2109D', '210B4', '210BF', '210C0', '210C1', '210C7', '210C8',
		'210C9', '210CF', '210D3', '210E4', '210F4', '210F5', '210F6', '2112F', '2113B', '2113D',
		'21145', '21148', '2114F', '21180', '21187', '211D9', '2123C', '2124F', '2127C', '212A8',
		'212A9', '212B0', '212E3', '212FE', '21302', '21303', '21304', '21305', '21336', '2133A',
		'21375', '21376', '2138E', '21398', '2139C', '213C5', '213C6', '213ED', '213FE', '21413',
		'21416', '21424', '2143F', '21452', '21454', '21455', '2148A', '21497', '214B6', '214E8',
		'214FD', '21577', '21582', '21596', '2160A', '21613', '21619', '2163E', '21661', '21692',
		'216B8', '216BA', '216C0', '216C1', '216C2', '216D3', '216D5', '216DF', '216E6', '216E7',
		'216E8', '216FA', '216FB', '216FC', '216FE', '2170D', '21710', '21726', '2173A', '2173B',
		'2173C', '21757', '2176C', '2176D', '2176E', '2176F', '21770', '21771', '21773', '21774',
		'217AB', '217B0', '217B1', '217B2', '217B3', '217B4', '217B5', '217C3', '217C7', '217D9',
		'217DA', '217DB', '217DC', '217DF', '217EF', '217F5', '217F6', '217F8', '217F9', '217FA',
		'217FB', '217FC', '21820', '21828', '21829', '2182A', '2182D', '21839', '2183A', '2183B',
		'21840', '21845', '21852', '2185E', '21861', '21862', '21863', '21864', '21877', '2187B',
		'21883', '21884', '21885', '2189E', '2189F', '218A0', '218A1', '218A2', '218BE', '218BF',
		'218D1', '218D6', '218D7', '218D8', '218D9', '218FA', '21903', '21904', '21905', '21910',
		'21911', '21912', '21915', '2191C', '21922', '21927', '2193B', '21944', '21958', '2196A',
		'2197C', '21980', '21983', '21988', '21996', '219DB', '219F3', '21A2D', '21A34', '21A45',
		'21A4B', '21A63', '21B44', '21BC1', '21BC2', '21C2A', '21C70', '21CA2', '21CA5', '21CAC',
		'21D46', '21D53', '21D5E', '21D90', '21DB6', '21DBA', '21DCA', '21DD1', '21DEB', '21DF9',
		'21E1C', '21E23', '21E37', '21E3D', '21E89', '21EA4', '21EA8', '21EC8', '21ED5', '21F0F',
		'21F15', '21F6A', '21F9E', '21FA1', '21FE8', '22045', '22049', '2207E', '2209A', '220C7',
		'220FC', '2212A', '2215B', '22173', '2217A', '221A1', '221C1', '221C3', '22208', '2227C',
		'22321', '22325', '223BD', '223D0', '223D7', '223FA', '22465', '22471', '2248B', '22491',
		'224B0', '224BC', '224C1', '224C9', '224CC', '224ED', '22513', '2251B', '22530', '22554',
		'2258D', '225AF', '225BE', '2261B', '2261C', '2262B', '22668', '2267A', '22696', '22698',
		'226F4', '226F5', '226F6', '22712', '22714', '2271B', '2271F', '2272A', '22775', '22781',
		'22796', '227B4', '227B5', '227CD', '22803', '2285F', '22860', '22871', '228AD', '228C1',
		'228F7', '22926', '22939', '2294F', '22967', '2296B', '22980', '22993', '22A66', '22ACF',
		'22AD5', '22AE6', '22AE8', '22B0E', '22B22', '22B3F', '22B43', '22B6A', '22BCA', '22BCE',
		'22C26', '22C27', '22C38', '22C4C', '22C51', '22C55', '22C62', '22C88', '22C9B', '22CA1',
		'22CA9', '22CB2', '22CB7', '22CC2', '22CC6', '22CC9', '22D07', '22D08', '22D12', '22D44',
		'22D4C', '22D67', '22D8D', '22D95', '22DA0', '22DA3', '22DA4', '22DB7', '22DEE', '22E0D',
		'22E36', '22E42', '22E78', '22E8B', '22EB3', '22EEF', '22F74', '22FCC', '22FE3', '23033',
		'23044', '2304B', '23066', '2307D', '2307E', '2308E', '230B7', '230BC', '230DA', '23103',
		'2313D', '2317D', '23182', '231A4', '231A5', '231B3', '231C8', '231C9', '231EA', '231F7',
		'231F8', '231F9', '2320F', '23225', '2322F', '23231', '23232', '23233', '23234', '23256',
		'2325E', '23262', '23281', '23289', '2328A', '232AB', '232AC', '232AD', '232D2', '232E0',
		'232E1', '23300', '2330A', '2331F', '233B4', '233CC', '233DE', '233E6', '233F4', '233F5',
		'233F9', '233FA', '233FE', '23400', '2343F', '23450', '2346F', '23472', '234E5', '23519',
		'23530', '23551', '2355A', '23567', '23595', '23599', '2359C', '235BB', '235CD', '235CE',
		'235CF', '235F3', '23600', '23617', '2361A', '2363C', '23640', '23659', '2365F', '23677',
		'2368E', '2369E', '236A6', '236AD', '236BA', '236DF', '236EE', '23703', '23716', '23720',
		'2372D', '2372F', '2373F', '23766', '23781', '237A2', '237BC', '237C2', '237D5', '237D6',
		'237D7', '2383A', '239C2', '23AA7', '23ADB', '23AEE', '23AFA', '23B1A', '23B5A', '23C63',
		'23C99', '23C9A', '23C9B', '23CB5', '23CB7', '23CC7', '23CC8', '23CC9', '23CFC', '23CFD',
		'23CFE', '23CFF', '23D40', '23D5B', '23D7E', '23D8F', '23DB6', '23DB7', '23DB8', '23DB9',
		'23DBA', '23DBB', '23DBC', '23DBD', '23DE3', '23DF8', '23E06', '23E11', '23E2C', '23E2D',
		'23E2E', '23E2F', '23E30', '23E31', '23E39', '23E88', '23E89', '23E8A', '23E8B', '23EB9',
		'23EBF', '23ED7', '23EF7', '23EF8', '23EF9', '23EFA', '23EFB', '23EFC', '23F35', '23F41',
		'23F4A', '23F61', '23F7F', '23F80', '23F81', '23F82', '23F8F', '23FB4', '23FB7', '23FC0',
		'23FC5', '23FEB', '23FEC', '23FED', '23FEE', '23FEF', '23FF0', '24011', '24039', '2403A',
		'2403B', '2403C', '2403D', '24057', '24085', '2408B', '2408C', '2408D', '24091', '240C9',
		'240E1', '240EC', '24104', '2410F', '24119', '2413F', '24140', '24144', '2414E', '24155',
		'24156', '24157', '2415C', '2415F', '24161', '24177', '2417A', '241A3', '241A4', '241A5',
		'241AC', '241B5', '241CD', '241E2', '241FC', '2421B', '2424B', '24256', '24259', '24276',
		'24277', '24278', '24284', '24293', '24295', '242A5', '242BF', '242C1', '242C9', '242CA',
		'242EE', '242FA', '2430D', '2431A', '24334', '24348', '24362', '24363', '24364', '24365',
		'2438C', '24396', '2439C', '243BD', '243C1', '243E9', '243EA', '243F2', '243F8', '24404',
		'24435', '24436', '2445A', '2445B', '24473', '24487', '24488', '244B9', '244BC', '244CE',
		'244D3', '244D6', '24505', '24521', '24578', '245C8', '24618', '2462A', '24665', '24674',
		'24697', '246D4', '24706', '24725', '2472F', '2478F', '247E0', '24812', '24823', '24882',
		'248E9', '248F0', '248F1', '248F2', '248F3', '248FB', '248FF', '24900', '24901', '2490C',
		'24916', '24917', '24919', '2492F', '24933', '24934', '2493E', '2493F', '24940', '24941',
		'24942', '24943', '24962', '24963', '24974', '24975', '24976', '2497B', '2497F', '24982',
		'24988', '24989', '2498A', '2498B', '2498C', '2498D', '2498E', '2498F', '24994', '249A4',
		'249A7', '249A9', '249AB', '249AC', '249AD', '249B7', '249B8', '249B9', '249BA', '249BB',
		'249C5', '249D0', '249DA', '249DE', '249DF', '249E3', '249E5', '249EC', '249ED', '249F6',
		'249F7', '249F8', '249F9', '249FB', '24A0E', '24A12', '24A13', '24A15', '24A21', '24A22',
		'24A23', '24A24', '24A25', '24A26', '24A27', '24A28', '24A29', '24A2A', '24A3E', '24A42',
		'24A45', '24A4A', '24A4E', '24A4F', '24A50', '24A51', '24A5D', '24A65', '24A66', '24A67',
		'24A71', '24A77', '24A78', '24A79', '24A7A', '24A8C', '24A93', '24A94', '24A95', '24A96',
		'24AA4', '24AA5', '24AA6', '24AA7', '24AB1', '24AB2', '24AB3', '24ABA', '24ABB', '24ABC',
		'24AC0', '24AC7', '24ACA', '24AD1', '24ADF', '24AE2', '24AE9', '24B0F', '24B6E', '24BF5',
		'24C09', '24C9E', '24C9F', '24CC9', '24CD9', '24D06', '24D13', '24DB8', '24DEA', '24DEB',
		'24E3B', '24E50', '24EA5', '24EA7', '24F0E', '24F5C', '24F82', '24F86', '24F97', '24F9A',
		'24FA9', '24FB8', '24FC2', '2502C', '25052', '2509D', '2512B', '25148', '2517D', '2517E',
		'251CD', '251E3', '251E6', '251E7', '25220', '25221', '25250', '25299', '252C7', '252D8',
		'2530E', '25311', '25313', '25419', '25425', '2542F', '25430', '25446', '2546C', '2546E',
		'2549A', '25531', '25535', '2553F', '2555B', '2555C', '2555D', '2555E', '25562', '25565',
		'25566', '25581', '25584', '2558F', '255B9', '255D5', '255DB', '255E0', '25605', '25635',
		'25651', '25683', '25695', '256E3', '256F6', '25706', '2571D', '25725', '2573D', '25772',
		'257C7', '257DF', '257E0', '257E1', '25857', '2585D', '25872', '258C8', '258DE', '258E1',
		'25903', '25946', '25956', '259AC', '259CC', '25A54', '25A95', '25A9C', '25AAE', '25AAF',
		'25AE9', '25B74', '25B89', '25BB3', '25BB4', '25BC6', '25BE4', '25BE8', '25C01', '25C06',
		'25C21', '25C4A', '25C65', '25C91', '25CA4', '25CC0', '25CC1', '25CFE', '25D20', '25D30',
		'25D43', '25D99', '25DB9', '25E0E', '25E49', '25E81', '25E82', '25E83', '25EA6', '25EBC',
		'25ED7', '25ED8', '25F1A', '25F4B', '25FE1', '25FE2', '26021', '26029', '26048', '26064',
		'26083', '26097', '260A4', '260A5', '26102', '26121', '26159', '2615A', '2615B', '2615C',
		'261AD', '261AE', '261B2', '261DD', '26258', '26261', '2626A', '2626B', '262D0', '26335',
		'2634B', '2634C', '26351', '263BE', '263F5', '263F8', '26402', '26410', '26411', '26412',
		'2644A', '26469', '26484', '26488', '26489', '2648D', '26498', '26512', '26572', '265A0',
		'265AD', '265BF', '26612', '26626', '266AF', '266B1', '266B5', '266DA', '266E8', '266FC',
		'26716', '26741', '26799', '267B3', '267B4', '267CC', '2681C', '26846', '2685E', '2686E',
		'26888', '2688A', '26893', '268C7', '2690E', '26911', '26926', '26939', '26951', '269A8',
		'269B5', '269F2', '269FA', '26A2D', '26A2E', '26A34', '26A42', '26A51', '26A52', '26B05',
		'26B0A', '26B13', '26B15', '26B23', '26B28', '26B50', '26B51', '26B52', '26B53', '26B5B',
		'26B75', '26B82', '26B96', '26B97', '26B9D', '26BB3', '26BC0', '26BF7', '26C21', '26C40',
		'26C41', '26C46', '26C7E', '26C7F', '26C80', '26C81', '26C82', '26CA4', '26CB7', '26CB8',
		'26CBD', '26CC0', '26CC3', '26CD1', '26D22', '26D23', '26D24', '26D25', '26D26', '26D27',
		'26D28', '26D29', '26D2A', '26D51', '26D74', '26DA0', '26DA1', '26DA2', '26DA3', '26DA4',
		'26DA5', '26DA6', '26DA7', '26DAE', '26DDC', '26DEA', '26DEB', '26DF0', '26E00', '26E05',
		'26E07', '26E12', '26E42', '26E43', '26E44', '26E45', '26E6E', '26E72', '26E77', '26E84',
		'26E88', '26E8B', '26E99', '26ED0', '26ED1', '26ED2', '26ED3', '26ED4', '26ED5', '26ED6',
		'26ED7', '26F26', '26F73', '26F74', '26F9F', '26FA1', '26FBE', '26FDE', '26FDF', '2700E',
		'2704B', '27052', '27053', '27088', '270AD', '270AE', '270AF', '270CD', '270D2', '270F8',
		'27109', '2710C', '2710D', '27126', '27127', '27164', '27165', '27175', '271CD', '2721B',
		'27267', '27280', '27285', '2728B', '272B2', '272B6', '272E6', '27352', '2739A', '273FF',
		'27422', '27450', '27484', '27486', '27574', '275A3', '275E0', '275E4', '275FD', '275FE',
		'27607', '2760C', '27632', '27639', '27655', '27656', '27657', '27694', '2770F', '27735',
		'27736', '27741', '2775E', '27784', '27785', '277CC', '27858', '27870', '2789D', '278B2',
		'278C8', '27924', '27967', '2797A', '279A0', '279DD', '279FD', '27A0A', '27A0E', '27A3E',
		'27A53', '27A59', '27A79', '27A84', '27ABD', '27ABE', '27AF4', '27B06', '27B0B', '27B18',
		'27B38', '27B39', '27B3A', '27B48', '27B65', '27BEF', '27BF4', '27C12', '27C6C', '27CB1',
		'27CC5', '27D2F', '27D53', '27D54', '27D66', '27D73', '27D84', '27D8F', '27D98', '27DBD',
		'27DDC', '27E4D', '27E4F', '27F2E', '27FF9', '28002', '28009', '2801E', '28023', '28024',
		'28048', '28083', '28090', '280BD', '280BE', '280E8', '280E9', '280F4', '2812E', '2814F',
		'2815D', '2816F', '28189', '281AF', '281BC', '28207', '28218', '2821A', '28256', '2827C',
		'2829B', '282CD', '282E2', '28306', '28318', '2832F', '2833A', '28365', '2836D', '2837D',
		'2838A', '28412', '28468', '2846C', '28473', '28482', '28501', '2853C', '2853D', '2856C',
		'285E8', '285F4', '28600', '2860B', '28625', '2863B', '286AA', '286AB', '286B2', '286BC',
		'286D8', '286E6', '2870F', '28713', '28804', '2882B', '2890D', '28933', '28948', '28949',
		'28956', '28964', '28968', '2896C', '2896D', '2897E', '28989', '289A8', '289AA', '289AB',
		'289B8', '289BC', '289C0', '289DC', '289DE', '289E1', '289E3', '289E4', '289E7', '289E8',
		'289F9', '289FA', '289FB', '289FC', '28A0F', '28A16', '28A25', '28A29', '28A32', '28A36',
		'28A44', '28A45', '28A46', '28A47', '28A48', '28A49', '28A4A', '28A4B', '28A59', '28A5A',
		'28A81', '28A82', '28A83', '28A9A', '28A9B', '28A9C', '28AC0', '28AC6', '28ACB', '28ACC',
		'28ACE', '28ADE', '28ADF', '28AE0', '28AE1', '28AE2', '28AE3', '28AE5', '28AEA', '28AFC',
		'28B0C', '28B13', '28B21', '28B22', '28B2B', '28B2C', '28B2D', '28B2F', '28B46', '28B4C',
		'28B4E', '28B50', '28B63', '28B64', '28B65', '28B66', '28B6C', '28B8F', '28B99', '28B9C',
		'28B9D', '28BB9', '28BC2', '28BC5', '28BD4', '28BD7', '28BD9', '28BDA', '28BE7', '28BE8',
		'28BE9', '28BEA', '28BEB', '28BEC', '28BF5', '28BFF', '28C03', '28C09', '28C1C', '28C1D',
		'28C23', '28C26', '28C2B', '28C30', '28C39', '28C3B', '28CCA', '28CCD', '28CD2', '28D34',
		'28D99', '28DB9', '28E0F', '28E36', '28E39', '28E65', '28E66', '28E97', '28EAC', '28EB2',
		'28EB3', '28ED9', '28EE7', '28FC5', '29079', '29088', '2908B', '29093', '290AF', '290B0',
		'290B1', '290C0', '290E4', '290E5', '290EC', '290ED', '2910D', '29110', '2913C', '2914D',
		'2915B', '2915E', '29170', '2919C', '291A8', '291D5', '291EB', '2941D', '29420', '29433',
		'2943F', '29448', '294D0', '294D9', '294DA', '294E5', '294E7', '2959E', '295B0', '295B8',
		'295D7', '295E9', '295F4', '29720', '29732', '297D4', '29810', '29857', '298A4', '298D1',
		'298EA', '298F1', '298FA', '29903', '29905', '2992F', '29945', '29947', '29948', '29949',
		'2995D', '2996A', '2999D', '299C3', '299C9', '29A28', '29A4D', '29B05', '29B0E', '29BD5',
		'29C73', '29CAD', '29D3E', '29D5A', '29D7C', '29D98', '29D9B', '29DF6', '29E06', '29E2D',
		'29E68', '29EAC', '29EB0', '29EC3', '29EF8', '29F23', '29F30', '29FB7', '29FDE', '2A014',
		'2A087', '2A0B9', '2A0E1', '2A0ED', '2A0F3', '2A0F8', '2A0FE', '2A107', '2A123', '2A133',
		'2A134', '2A150', '2A192', '2A193', '2A1AB', '2A1B4', '2A1B5', '2A1DF', '2A1F5', '2A220',
		'2A233', '2A293', '2A29F', '2A2B2', '2A2B4', '2A2B6', '2A2BA', '2A2BD', '2A2DF', '2A2FF',
		'2A351', '2A3A9', '2A434', '2A45B', '2A5C6', '2A5CB', '2A601', '2A632', '2A64A', '2A65B',
		'2A6A9', '2ADFF', '2F825', '2F83B', '2F840', '2F878', '2F894', '2F8A6', '2F8CD', '2F994',
		'2F9B2', '2F9BC', '2F9D4'
	);
  
	protected $_extraHanziCharactersReplacementTable;
	protected $_extraHanziCharactersCharsTable;

	public function __construct()
	{
		//Cache characters tables
		$this->getExtraHanziCharsTable();
		$this->getExtraHanziRemplacementTable();	
	}

	public function getExtraHanziRemplacementTable()
	{
		if(!$this->_extraHanziCharactersReplacementTable)
		{
			foreach($this->_extraHanziUnicodeTable as $v)
			{
				$this->_extraHanziCharactersReplacementTable[] = '{mb4_han:'.$v.'}';
			}
		}
	
		return $this->_extraHanziCharactersReplacementTable;
	}
  
	public function getExtraHanziCharsTable()
	{
		if(!$this->_extraHanziCharactersCharsTable)
		{
			foreach($this->_extraHanziUnicodeTable as $v)
			{
				$this->_extraHanziCharactersCharsTable[] = html_entity_decode("&#x{$v};");
			}
		}
	
		return $this->_extraHanziCharactersCharsTable;
	}

	public function encodeExtraHanzi($string)
	{
		$extraHanziChars = $this->getExtraHanziCharsTable();
		$extraReplacements = $this->getExtraHanziRemplacementTable();

		return str_replace($extraHanziChars, $extraReplacements, $string);
	}

	public function decodeExtraHanzi($string)
	{
		$extraHanziChars = $this->getExtraHanziCharsTable();
		$extraReplacements = $this->getExtraHanziRemplacementTable();

		return str_replace($extraReplacements, $extraHanziChars, $string);
	}  
}