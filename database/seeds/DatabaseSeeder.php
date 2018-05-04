<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'yoole',
            'email' => 'lethucntt1@gmail.com',
            'password' => bcrypt('12121996'),
            'phone' => '0978716945',
            'address' => 'thanh hoa',
            'birthday' => '1996-12-12',
            'gender' => 'male',
            'status' => 1,
        ]);

        DB::table('type_product')->insert([
            'name' =>'Balo Phượt',
            'description' => 'Balo Phượt',
            'status' => 1,
        ]);

        DB::table('type_product')->insert([
            'name' =>'Găng tay',
            'description' => 'găng tay',
            'status' => 1,
        ]);

        DB::table('type_product')->insert([
            'name' =>'Giày',
            'description' => 'giày',
            'status' => 1,
        ]);

        DB::table('type_product')->insert([
            'name' =>'Mũ bảo hiểm',
            'description' => 'mũ',
            'status' => 1,
        ]);

        DB::table('type_product')->insert([
            'name' =>'Giáp',
            'description' => 'giáp',
            'status' => 1,
        ]);

        DB::table('size')->insert([
            'name' => 'free',
            'description' => 'khong co size',
        ]);

        DB::table('size')->insert([
            'name' => 'S',
            'description' => 'size bé nhất',
        ]);

        DB::table('size')->insert([
            'name' => 'M',
            'description' => 'size bé gần nhất',
        ]);


        DB::table('color')->insert([
            'name' => 'none',
            'description' => 'khong mau',
        ]);

        DB::table('color')->insert([
            'name' => 'đỏ',
            'description' => 'đỏ',
        ]);

        DB::table('color')->insert([
            'name' => 'xanh',
            'description' => 'xanh',
        ]);

        DB::table('color')->insert([
            'name' => 'vàng',
            'description' => 'vàng',
        ]);

        DB::table('comment')->insert([
            'user_id' => 1,
            'content' => 'sanphamtot',
            'status' => 1,
        ]);

        DB::table('company')->insert([
            'name' => 'Công ty TNHH Giày Thư Tâm',
            'email' => 'giaythutam@gmail.com',
            'phone' => '19005678',
            'address' => '104 Đào Tấn',
            'status' => 1,
        ]);

        DB::table('sale')->insert([
            'code' => 'ASKM5',
            'type' => 'khuyến mại nhân dịp 8-3',
            'status' => 1,
        ]);



        DB::table('products')->insert([
            'type_id' => 1,
            'company_id' => 1,
            'name' => 'Balo lính 7D - Full OP',
            'title' => 'Balo lính 7D - Full OP',
            'description' => '<p>Chất liệu sợi tổng hợp si&ecirc;u bền</p>
<p>Chịu m&agrave;i m&ograve;n, chống trầy xước</p>
<p>Thiết kế th&ocirc;ng minh, tiện dụng</p>
<p>3 Ngăn chứa c&oacute; thể th&aacute;o rời</p>
<p>Ngăn rời d&ugrave;ng l&agrave;m t&uacute;i đeo ch&eacute;o</p>
<p>Quai đeo bền chắc</p>
<p>C&oacute; ngăn chứa laptop 15.6</p>
<p>M&agrave;u sắc nổi bật</p>
<p>Đen, v&agrave;ng c&aacute;t, camo, xanh l&iacute;nh..</p>',
            'image' => 'balo_linh_7d__1__800x600.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 14000000,
            'qty' => 10,
        ]);

        DB::table('products')->insert([
            'type_id' => 4,
            'company_id' => 1,
            'name' => 'Mũ bảo hiểm 3/4',
            'title' => 'Mũ phượt',
            'description' => '<p><strong>Mũ bảo hiểm 3/4</strong>&nbsp;l&agrave; sự lựa chọn của nhiều người d&ugrave;ng bởi n&oacute; kết hợp được nhiều yếu tốt:&nbsp;<em>vừa thời trang, đẹp mắt m&agrave; vẫn rất chắc chắn, an to&agrave;n</em>.</p>
<p>Một chiếc mũ 3/4 tốt c&oacute; thể dễ d&agrave;ng sử dụng khi di chuyển trong th&agrave;nh phố nhưng vẫn rất ph&ugrave; hợp cho c&aacute;c chuyến chạy xe, đi chơi d&agrave;i ng&agrave;y.</p>
<p><img src="mu_3_4_dep.jpg" /></p>
<p>3S 103D l&agrave; m&atilde; sản phẩm mới nhất của thương hiệu&nbsp;<strong>Andes</strong>&nbsp;trong năm 2018 với những cải tiến, n&acirc;ng cấp đ&aacute;ng kể hỗ trợ cho người d&ugrave;ng.</p>
<p>Đầu ti&ecirc;n, kiểu d&aacute;ng của 3S 103D kh&aacute;c hẳn so với những chiếc&nbsp;<strong>mũ bảo hiểm 3/4 andes</strong>&nbsp;th&ocirc;ng thường. D&aacute;ng mũ tr&ugrave;m g&aacute;y, bo tr&ograve;n k&eacute;o d&agrave;i xuống m&aacute;.</p>
<p>Tuy nhi&ecirc;n, phần gần cằm, nh&agrave; sản xuất thiết kế th&ecirc;m một lớp đệm cotton &ecirc;m &aacute;i với t&aacute;c dụng ngăn bụi bẩn, chống gi&oacute; v&agrave; bảo vệ tốt hơn. Lớp đệm n&agrave;y cũng tăng th&ecirc;m vẻ thời trang, nổi bật cho sản phẩm.</p>
<p>Ngo&agrave;i t&aacute;c dụng ch&iacute;nh kể tr&ecirc;n, lớp l&oacute;t n&agrave;y c&ograve;n c&oacute; t&aacute;c dụng kh&aacute;c. N&oacute; c&oacute; thể xếp gọn lại, l&agrave;m giảm k&iacute;ch thước của to&agrave;n bộ mũ, nhờ đ&oacute;&nbsp;<strong>dễ d&agrave;ng cất cốp xe</strong>&nbsp;hay treo m&oacute;c m&agrave; kh&ocirc;ng bị vướng v&iacute;u.</p>
<p><img src="mu_bao_hiem_andes_chinh_hang" /></p>
<p>&nbsp;</p>
<p>Sử dụng&nbsp;<strong>nhựa ABS nguy&ecirc;n sinh</strong>&nbsp;l&agrave;m vỏ t&ecirc;u chuẩn,&nbsp;<strong>mũ bảo hiểm 3/4</strong>&nbsp;andes 3S 103D c&oacute; khả năng chống chịu va đập rất tốt. Lớp vỏ n&agrave;y sẽ l&agrave;m giảm đ&aacute;ng kể chấn thương khi xảy ra va chạm, tai nạn..</p>
<p>Phần lớp l&oacute;t sợi cotton được kh&aacute;ch h&agrave;ng đ&aacute;nh gi&aacute; rất cao v&igrave; n&oacute; mang lại cảm gi&aacute;c thoải m&aacute;i, m&aacute;t mẻ hơn. Khi sử dụng thời gian d&agrave;i, lớp l&oacute;t &ecirc;m &aacute;i gi&uacute;p&nbsp;<em>giảm đ&aacute;ng kể hiện tượng đau đầu, cộm, mỏi cổ...</em></p>
<p>Một chi tiết được n&acirc;ng cấp kh&aacute;c rất hữu &iacute;ch l&agrave; lớp l&oacute;t của mũ c&oacute; thể th&aacute;o rời to&agrave;n bộ. Việc th&aacute;o lớp l&oacute;t gi&uacute;p việc vệ sinh dễ d&agrave;ng hơn.</p>
<p>Mất khoảng&nbsp;<strong>15s&nbsp;</strong>để th&aacute;o lớp l&oacute;t v&agrave; c&oacute; thể sử dụng m&aacute;y giặt để l&agrave;m sạch. Bạn kh&ocirc;ng cần lo về việc ra mồ h&ocirc;i, b&iacute;, &aacute;m m&ugrave;i hay bị g&agrave;u.. hữu &iacute;ch với những người&nbsp;<em>mồ h&ocirc;i muối, mồ h&ocirc;i dầu..</em></p>
<p>&nbsp;</p>
<p><strong>Th&ocirc;ng số kĩ thuật:</strong></p>
<p><em>- Thương hiệu: GRS</em></p>
<p><em>- Trọng lượng: ~500g</em></p>
<p><em>- Chất liệu: Nhựa ABS, Sợi Cotton, Xốp chịu lực TPS</em></p>
<p><em>- Size: free</em></p>
<p>Qu&yacute; kh&aacute;ch quan t&acirc;m tới sản phẩm mũ bảo hiểm 3/4 Andes 3S 103D xin gọi tới: <strong>0978716945</strong>để được tư vấn, hướng dẫn đặt h&agrave;ng, nhận h&agrave;ng tr&ecirc;n to&agrave;n quốc.</p>
<p><em>&nbsp;</em></p>',
            'image' => '34.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 250000,
            'qty' => 10,
        ]); 
        DB::table('products')->insert([
            'type_id' => 4,
            'company_id' => 1,
            'name' => 'Mũ bảo hiểm nửa đầu GXT có kính ngắn',
            'title' => 'Mũ bảo hiểm nửa đầu GXT có kính ngắn',
            'description' => '<p>GXT l&agrave; thương hiệu mũ bảo hiểm rất được y&ecirc;u th&iacute;ch tại thị trường Việt Nam với c&aacute;c sản phẩm:&nbsp;<em>GXT 3/4, GXT lật cằm 2017, 2018, GXT fullface....</em></p>
<p>M&ugrave;a h&egrave; năm 2018, thương hiệu n&agrave;y đ&atilde; cho ra mắt th&ecirc;m d&ograve;ng sản phẩm&nbsp;<strong>mũ bảo hiểm nửa đầu</strong>&nbsp;với thiết kế gọn nhẹ, khỏe khoắn t&iacute;ch hợp c&ugrave;ng k&iacute;nh chống bụi, chống nắng bản lớn.</p>
<p>Ngo&agrave;i ra, sản phẩm n&agrave;y c&ograve;n được n&acirc;ng cấp một số chi tiết hỗ trợ người d&ugrave;ng tốt hơn, rất ph&ugrave; hợp khi di chuyển, chạy xe trong th&agrave;nh phố<img src="gxt13.jpg" /></p>
<p>&nbsp;</p>
<p>Vỏ ngo&agrave;i của chiếc mũ được sản xuất ho&agrave;n to&agrave;n từ&nbsp;<strong>nhựa ABS nguy&ecirc;n sinh</strong>. Đ&acirc;y l&agrave; loại nhựa ti&ecirc;u chuẩn cho sản xuất mũ bảo hiểm hiện nay với đặc t&iacute;nh:&nbsp;<em>trọng lượng nhẹ, chống chịu va đập rất tốt, cứng, chắc chắn..</em></p>
<p>Phần l&oacute;t trong, nh&agrave; sản xuất kh&ocirc;ng sử dụng l&oacute;t sợi vải như c&aacute;c loại mũ truyền thống m&agrave; thay đổi sang dạng sợi nhựa bản lớn. Sự thay đổi n&agrave;y gi&uacute;p hạn chế đ&aacute;ng kể việc&nbsp;<em>ra mồ h&ocirc;i, b&iacute;, n&oacute;ng nực</em>... nhất l&agrave; trong m&ugrave;a h&egrave;.</p>
<p><img src="gxt.jpg" /></p>
<p>2 lỗ h&uacute;t gi&oacute; lớn phế trước tr&aacute;n gi&uacute;p tăng khả năng điều h&ograve;a kh&ocirc;ng kh&iacute;. Gi&oacute; từ lỗ n&agrave;y sẽ đi khắp ph&iacute;a trong mũ v&agrave; tho&aacute;t ra ph&iacute;a sau g&aacute;y, ưu điểm đ&aacute;ng kể bởi hầu hết c&aacute;c loại mũ bảo hiểm nửa đầu hiện tại đều kh&ocirc;ng c&oacute; chi tiết n&agrave;y.</p>
<p>Chốt kh&oacute;a hợp kim kh&ocirc;ng rỉ rất bền bỉ, b&ecirc;n cạnh đ&oacute; l&agrave; chiếc k&iacute;nh tr&ugrave;m bản lớn ph&iacute;a trước gi&uacute;p ngăn bụi bẩn, c&ocirc;n tr&ugrave;ng, đất đ&aacute;, bảo vệ mắt...</p>',
            'image' => 'mu_bao_hiem_gxt_nua_dau_900x600.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 14000000,
            'qty' => 10,
        ]);
        DB::table('products')->insert([
            'type_id' => 4,
            'company_id' => 1,
            'name' => 'Mũ bảo hiểm Fullface Royal 2018',
            'title' => 'Mũ bảo hiểm Fullface Royal 2018 (Màu trơn)',
            'description' => ' <p><strong>Royal</strong>&nbsp;l&agrave; thương hiệu mũ bảo hiểm nội địa, sản xuất tại Việt Nam với d&acirc;y chuyền c&ocirc;ng nghệ ngoại nhập. Nhờ vậy sản phẩm đảm bảo chất lượng nhưng c&oacute; mức gi&aacute; th&agrave;nh hợp l&yacute;, vừa t&uacute;i tiền.</p>
<p><strong>Royal M136</strong>&nbsp;l&agrave; chiếc&nbsp;<strong>mũ bảo hiểm fullface</strong>&nbsp;rất được y&ecirc;u th&iacute;ch bởi người d&ugrave;ng phổ th&ocirc;ng. Sản phẩm đ&atilde; c&oacute; mặt tr&ecirc;n thị trường từ cuối năm 2016 v&agrave; nhận được phản hồi rất tốt.</p>
<p>&nbsp;</p>
<p><img src="6_1.jpg" /></p>
<p>&nbsp;</p>
<p>Về thiết kế, điểm nổi bật nhất của sản phẩm n&agrave;y l&agrave;&nbsp;<em>k&iacute;ch thước nhỏ gọn, trọng lượng nhẹ</em>, rất ph&ugrave; hợp khi di chuyển trong phố hoặc c&aacute;c chuyến đi ngắn ng&agrave;y.</p>
<p>Vỏ mũ sử dụng chất liệu&nbsp;<strong>nhựa ABS nguy&ecirc;n sinh</strong>&nbsp;ti&ecirc;u chuẩn, n&oacute; gi&uacute;p tăng cường khả năng chống chịu va đập, đ&agrave;n hồi v&agrave; bảo vệ tốt cho người đội. B&ecirc;n cạnh đ&oacute;, loại nhựa n&agrave;y c&oacute; đặc điểm rất nhẹ, gi&uacute;p tổng trọng lượng chiếc mũ giảm đi đ&aacute;ng kể.</p>
<p>Trọng lượng nhẹ c&oacute; ảnh hưởng rất lớn đến qu&aacute; tr&igrave;nh sử dụng,&nbsp;<em>ngăn nhức mỏi, đau cổ, gi&uacute;p cử động thoải m&aacute;i v&agrave; linh hoạt</em>&nbsp;hơn, nhất l&agrave; khi đi tour, phượt đường d&agrave;i.</p>
<p>&nbsp;</p>
<p>Để bảo vệ mắt, chắn bụi bẩn, nh&agrave; sản xuất t&iacute;ch hợp k&iacute;nh chống bụi m&agrave;u &aacute;m khỏi với khả năng l&agrave;m dịu mắt. K&iacute;nh&nbsp;<strong>chất liệu mica</strong>&nbsp;dẻo với khả năng đ&agrave;n hồi, c&oacute; thể bẻ cong dễ d&agrave;ng, hữu &iacute;ch khi kh&ocirc;ng may xảy ra va chạm, tai nạn.</p>
<p><strong>Mũ bảo hiểm fullface</strong>&nbsp;c&oacute; nhược điểm l&agrave; kh&aacute; b&iacute;, n&oacute;ng.. nhất l&agrave; trong m&ugrave;a h&egrave; ở Việt Nam. Hiểu r&otilde; yếu tố đ&oacute;,&nbsp;<strong>4 lỗ h&uacute;t gi&oacute; lớn</strong>&nbsp;được thiết kế trước tr&aacute;n v&agrave; dưới cằm mang lại sự m&aacute;t mẻ, điều h&ograve;a kh&ocirc;ng kh&iacute; tốt hơn, kh&ocirc;ng bị ngộp khi tắc đường.</p>
<p>C&aacute;c lỗ h&uacute;t gi&oacute; n&agrave;y c&oacute; thể đ&oacute;ng mở t&ugrave;y chỉnh để ph&ugrave; hợp với nhiều điều kiện thời tiết kh&aacute;c nhau.</p>
<p>&nbsp;</p>
<p><strong>Th&ocirc;ng số kĩ thuật:</strong></p>
<p><em>- Trọng lượng: 800g</em></p>
<p><em>- M&agrave;u sắc: Đen nh&aacute;m, Đen đỏ, Đen xanh, Đen trắng</em></p>
<p><em>- Size: M, L, XL</em></p>
<p>Nếu cần th&ecirc;m th&ocirc;ng tin về sản phẩm mũ bảo hiểm royal fullface, qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ:&nbsp;<strong>0966778790</strong>&nbsp;để được tư vấn, hướng dẫn đặt h&agrave;ng, nhận h&agrave;ng tại nh&agrave; tr&ecirc;n to&agrave;n quốc.</p>',
            'image' => '6_1_900x599.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 350000,
            'qty' => 10,
        ]);

        DB::table('products')->insert([
            'type_id' => 4,
            'company_id' => 1,
            'name' => 'Mũ bảo hiểm GRS lật hàm 2 kính',
            'title' => 'Mũ bảo hiểm GRS lật hàm 2 kính',
            'description' => ' <p>Grs l&agrave; thương hiệu mũ bảo hiểm nổi tiếng tới từ Đ&agrave;i Loan, sản phẩm&nbsp;<strong>mũ bảo hiểm lật h&agrave;m</strong>&nbsp;của thương hiệu n&agrave;y lu&ocirc;n được ưa chuộng bởi thiết kế chắc chắn, an to&agrave;n cho người sử dụng nhưng vẫn rất khỏe khoắn, thời trang. Đi k&egrave;m với chất lượng l&agrave; mức gi&aacute; hợp l&yacute;, ph&ugrave; hợp với đại đa số người d&ugrave;ng b&igrave;nh d&acirc;n.</p>
<p><img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20171212/5894749/mu_bao_hiem_lat_ham_grs_(3).jpg" alt="" width="900" height="600" /></p>
<p>&nbsp;</p>
<p>Sản phẩm được trang bị 2 k&iacute;nh chống bụi.</p>
<p><em>- K&iacute;nh ngo&agrave;i m&agrave;u trắng, phủ lớp chống l&oacute;a v&agrave; hỗ trợ g&oacute;c nh&igrave;n rộng</em></p>
<p><em>- K&igrave;nh ph&iacute;a trong m&agrave;u đen, giấu ch&igrave;m dưới tr&aacute;n.</em></p>
<p>K&iacute;nh đen c&oacute; thể gạt l&ecirc;n, xuống bằng n&uacute;t bấm b&ecirc;n cằm tr&aacute;i, rất tiện lợi. Nhờ c&oacute; 2 lớp k&iacute;nh, khả năng chống bụi, bảo vệ được tăng l&ecirc;n đ&aacute;ng kể. Th&ecirc;m v&agrave;o đ&oacute;, k&iacute;nh đen c&ograve;n hạn chế ch&oacute;i mắt, l&oacute;a khi thời tiết nắng n&oacute;ng m&ugrave;a h&egrave;.</p>
<p>&nbsp;</p>
<p><img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20171212/5894749/mu_bao_hiem_lat_ham_grs_(6).jpg" alt="" width="900" height="600" /></p>
<p>&nbsp;</p>
<p>Với mức gi&aacute; b&aacute;n lẻ 1600k, mũ lật h&agrave;m grs c&ograve;n được tặng th&ecirc;m tai nghe blutooth trị gi&aacute; 300k để sử dụng khi chạy xe, đi đường d&agrave;i. N&oacute; kh&aacute; hữu &iacute;ch với những người thường xuy&ecirc;n phải xử l&yacute; c&ocirc;ng việc nhưng vẫn muốn c&oacute; chuyến đi thoải m&aacute;i.</p>
<p>So với c&aacute;c sản phẩm kh&aacute;c tr&ecirc;n thị trường, GRS kh&ocirc;ng phải xuất sắc nhất, nhưng n&oacute; mang lại sự hiệu quả, bền bỉ với mức gi&aacute; dễ tiếp cận với mọi người.</p>
<p>Th&ocirc;ng số kĩ thuật:</p>
<p><em>Thương hiệu: GRS - Đ&agrave;i Loan</em></p>
<p><em>Chất liệu: Nhựa ABS, sợi cotton</em></p>
<p><em>M&agrave;u sắc: đen</em></p>
<p><em>Size: Freesize</em></p>
<p>Li&ecirc;n hệ mua h&agrave;ng:&nbsp;<strong>0978716945</strong></p>
<p>&nbsp;</p>',
            'image' => 'kang.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 550000,
            'qty' => 10,
        ]);

        DB::table('products')->insert([
            'type_id' => 1,
            'company_id' => 1,
            'name' => 'Balo đeo chéo FreeBase',
            'title' => 'Balo đeo chéo vải thô FreeBase',
            'description' => '<p>L&agrave; thiết kế đặc biệt hữu dụng của qu&acirc;n đội Mỹ,&nbsp;<a href="http://dophuot.com.vn/p2151847/balo-vai-tho-freebase">Balo đeo ch&eacute;o vải th&ocirc;</a>&nbsp;FreeBase c&oacute; cấu tạo cực kỳ độc đ&aacute;o v&agrave; hữu dụng, nếu chưa từng sử dụng loại balo n&agrave;y, chắc chắn bạn sẽ rất bất ngờ.</p>
<p>Cấu tạo của&nbsp;Balo đeo ch&eacute;o vải th&ocirc; FreeBase l&agrave; vải bố bền chắc, chịu m&agrave;i m&ograve;n, chống bụi bẩn rất tốt, lớp vải mềm nhưng dẻo dai. Chiếc balo n&agrave;y c&oacute; thể dễ d&agrave;ng gấp gọn, cuộn tr&ograve;n như một chiếc t&uacute;i nhỏ v&agrave; dễ d&agrave;ng mang v&aacute;c, cất giữ khi kh&ocirc;ng chứa đồ.</p>
<p>M&oacute;c treo th&ocirc;ng minh gi&uacute;p bạn c&oacute; thể dụng chiếc&nbsp;<a href="http://dophuot.com.vn/c108524/balo-army-balo-linh">balo l&iacute;nh</a>&nbsp;n&agrave;y như một chiếc t&uacute;i đeo ch&eacute;o đẹp mắt, balo x&aacute;ch tay&nbsp;hoặc balo đeo lưng ho&agrave;n chỉnh.</p>
<p>Việc cất giữ đồ của sản phẩm n&agrave;y kh&aacute; đơn giản, th&iacute;ch hợp nhất cho c&aacute;c loại quần &aacute;o, dụng cụ c&aacute; nh&acirc;n nhỏ. Bạn chỉ cần xếp lớp quần &aacute;o v&agrave; đặt c&aacute;c đồ vật điện tử, dễ hư hại cần cất giữ v&agrave;o giữa c&aacute;c lớp n&agrave;y. Quần &aacute;o sẽ thay thế cho lớp giảm chấn v&agrave; cũng &ecirc;m &aacute;i khi bạn đeo lưng, mang v&aacute;c.</p>
<p>Tiện dụng v&agrave; phong c&aacute;ch, thiết kế độc đ&aacute;o, dễ sử dụng.&nbsp;Balo đeo ch&eacute;o vải th&ocirc; FreeBase l&agrave; một trong những sản phẩm được y&ecirc;u th&iacute;ch nhất bởi c&aacute;c bạn trẻ y&ecirc;u xe dịch v&agrave; th&iacute;ch sự độc đ&aacute;o, c&aacute; t&iacute;nh.<img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20151110/2151847/Balo_vai_tho_FreeBase_(backpack_freebase_military_style_canvas_backpack_1_1024x1024).jpg" alt="" width="500" height="500" /></p>
<p><img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20151110/2151847/Balo_vai_tho_FreeBase_(t2o805xhxxxxxxxxxx___733908710).jpg" alt="" width="500" height="699" /></p>',
            'image' => 'T2O805XhxXXXXXXXXX___733908710_500x699.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 250000,
            'qty' => 10,
        ]);


        DB::table('products')->insert([
            'type_id' => 1,
            'company_id' => 1,
            'name' => 'Balo du lịch Mammut',
            'title' => 'Balo du lịch Mammut',
            'description' => '<p>Một chiếc balo du lịch vừa tiện dụng, vừa thời trang, nhiều t&iacute;nh năng gi&uacute;p bạn thoải m&aacute;i sử dụng khi đi học đi chơi hay du lịch, d&atilde; ngoại ngo&agrave;i trời.</p>
<p>Balo du lịch Mummut l&agrave; thương hiệu h&agrave;ng VNXK rất nổi tiếng tại thị trường Ch&acirc;u &Acirc;u với chất lượng cao, kiểu d&aacute;ng thời trang, tinh tế.</p>
<p>Chất liệu của chiếc balo l&agrave; sợi tổng hợp 400D với khả năng chống thấm, chống mưa nhẹ tiện dụng. Kh&oacute;a k&eacute;o &eacute;p nhiệt gi&uacute;p hạn chế tối đa nước mưa, bụi bẩn c&oacute; thể ngấm v&agrave;o trong. Chất vải sợi rất bền chắc, khả năng chịu m&agrave;i m&ograve;n cao.</p>
<p>Balo du lịch Mammut c&oacute; t&iacute;ch hợp ngăn để laptop tiện dụng (15") th&iacute;ch hợp cho đi bộ, đạp xe khi đi học, cũng như đi chơi, dạo phố.</p>
<p>Quai đeo balo nhiều lớp mang lại cảm gi&aacute;c sử dụng chắc chắn, kh&ocirc;ng đau nhức khi sử dụng thời gian d&agrave;i, đặc biệt tiện dụng khi bạn đi bộ.</p>
<p>Dung t&iacute;ch chiếc balo Mammut khoảng 25L. Với dung t&iacute;ch n&agrave;y, bạn ho&agrave;n to&agrave;n c&oacute; thể cất giữ đồ đạc cho chuyến đi chơi k&eacute;o d&agrave;i 3-5 ng&agrave;y.</p>
<p>Nhỏ gọn, tiện dụng, tinh tế, thiết kế đẹp mắt với gi&aacute; th&agrave;nh rẻ, bạn c&ograve;n cần g&igrave; hơn một chiếc balo du lịch như thế.</p>
<p>&nbsp;</p>
<p><img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20160414/2788214/Balo_Mammut_(12980508_1195538050491126_225666810_n).jpg" alt="" /></p>
<p><img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20160414/2788214/Balo_Mammut_(13022370_1195538077157790_1064432242_n).jpg" alt="" width=',
            'image' => '13015087_1195537940491137_76438799_n_720x960.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 500000,
            'qty' => 10,
        ]);


        DB::table('products')->insert([
            'type_id' => 1,
            'company_id' => 1,
            'name' => 'Balo du lịch Mammut',
            'title' => 'Balo du lịch Mammut',
            'description' => '<p>Một chiếc balo du lịch vừa tiện dụng, vừa thời trang, nhiều t&iacute;nh năng gi&uacute;p bạn thoải m&aacute;i sử dụng khi đi học đi chơi hay du lịch, d&atilde; ngoại ngo&agrave;i trời.</p>
<p>Balo du lịch Mummut l&agrave; thương hiệu h&agrave;ng VNXK rất nổi tiếng tại thị trường Ch&acirc;u &Acirc;u với chất lượng cao, kiểu d&aacute;ng thời trang, tinh tế.</p>
<p>Chất liệu của chiếc balo l&agrave; sợi tổng hợp 400D với khả năng chống thấm, chống mưa nhẹ tiện dụng. Kh&oacute;a k&eacute;o &eacute;p nhiệt gi&uacute;p hạn chế tối đa nước mưa, bụi bẩn c&oacute; thể ngấm v&agrave;o trong. Chất vải sợi rất bền chắc, khả năng chịu m&agrave;i m&ograve;n cao.</p>
<p>Balo du lịch Mammut c&oacute; t&iacute;ch hợp ngăn để laptop tiện dụng (15") th&iacute;ch hợp cho đi bộ, đạp xe khi đi học, cũng như đi chơi, dạo phố.</p>
<p>Quai đeo balo nhiều lớp mang lại cảm gi&aacute;c sử dụng chắc chắn, kh&ocirc;ng đau nhức khi sử dụng thời gian d&agrave;i, đặc biệt tiện dụng khi bạn đi bộ.</p>
<p>Dung t&iacute;ch chiếc balo Mammut khoảng 25L. Với dung t&iacute;ch n&agrave;y, bạn ho&agrave;n to&agrave;n c&oacute; thể cất giữ đồ đạc cho chuyến đi chơi k&eacute;o d&agrave;i 3-5 ng&agrave;y.</p>
<p>Nhỏ gọn, tiện dụng, tinh tế, thiết kế đẹp mắt với gi&aacute; th&agrave;nh rẻ, bạn c&ograve;n cần g&igrave; hơn một chiếc balo du lịch như thế.</p>
<p>&nbsp;</p>
<p><img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20160414/2788214/Balo_Mammut_(12980508_1195538050491126_225666810_n).jpg" alt="" /></p>
<p><img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20160414/2788214/Balo_Mammut_(13022370_1195538077157790_1064432242_n).jpg" alt="" width=',
            'image' => '13015087_1195537940491137_76438799_n_720x960.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 500000,
            'qty' => 10,
        ]);
        DB::table('products')->insert([
            'type_id' => 2,
            'company_id' => 1,
            'name' => 'Găng tay xe máy Fuyuanda 1/2 lưới cụt ngón ',
            'title' => 'Găng tay xe máy Fuyuanda 1/2 lưới cụt ngón ',
            'description' => '<p>Chất liệu sợi cotton tho&aacute;ng m&aacute;t</p>
<p>Dết lưới tho&aacute;ng gi&oacute;</p>
<p>Kiểu d&aacute;ng hở ng&oacute;n th&iacute;ch hợp cho m&ugrave;a h&egrave;</p>
<p>Cố định cổ tay nhờ miếng d&aacute;n</p>
<p>L&oacute;t sợi tổng hợp chống ma s&aacute;t l&ograve;ng b&agrave;ntay</p>
<p>Khả năng đ&agrave;n hồi tốt</p>
<p>Nhỏ gọn, dễ cất giữ</p>
<p>C&oacute; thể vệ sinh nhờ m&aacute;y giặt</p>
<p>Li&ecirc;n hệ mua h&agrave;ng:0978716945</p>',
            'image' => '30124926_1912772195434371_5870364469858664448_n_600x900.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 120000,
            'qty' => 10,
        ]);
        DB::table('products')->insert([
            'type_id' => 2,
            'company_id' => 1,
            'name' => 'Găng tay xe máy Fuyuanda 1/2 lưới cụt ngón ',
            'title' => 'Găng tay xe máy Fuyuanda 1/2 lưới cụt ngón ',
            'description' => '<p>Chất liệu sợi cotton tho&aacute;ng m&aacute;t</p>
<p>Dết lưới tho&aacute;ng gi&oacute;</p>
<p>Kiểu d&aacute;ng hở ng&oacute;n th&iacute;ch hợp cho m&ugrave;a h&egrave;</p>
<p>Cố định cổ tay nhờ miếng d&aacute;n</p>
<p>L&oacute;t sợi tổng hợp chống ma s&aacute;t l&ograve;ng b&agrave;ntay</p>
<p>Khả năng đ&agrave;n hồi tốt</p>
<p>Nhỏ gọn, dễ cất giữ</p>
<p>C&oacute; thể vệ sinh nhờ m&aacute;y giặt</p>
<p>Li&ecirc;n hệ mua h&agrave;ng:0978716945</p>',
            'image' => '30124926_1912772195434371_5870364469858664448_n_600x900.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 120000,
            'qty' => 10,
        ]);
        DB::table('products')->insert([
            'type_id' => 2,
            'company_id' => 1,
            'name' => 'Găng tay xe máy Fuyuanda 1/2 lưới cụt ngón ',
            'title' => 'Găng tay xe máy Fuyuanda 1/2 lưới cụt ngón ',
            'description' => '<p>Chất liệu sợi cotton tho&aacute;ng m&aacute;t</p>
<p>Dết lưới tho&aacute;ng gi&oacute;</p>
<p>Kiểu d&aacute;ng hở ng&oacute;n th&iacute;ch hợp cho m&ugrave;a h&egrave;</p>
<p>Cố định cổ tay nhờ miếng d&aacute;n</p>
<p>L&oacute;t sợi tổng hợp chống ma s&aacute;t l&ograve;ng b&agrave;ntay</p>
<p>Khả năng đ&agrave;n hồi tốt</p>
<p>Nhỏ gọn, dễ cất giữ</p>
<p>C&oacute; thể vệ sinh nhờ m&aacute;y giặt</p>
<p>Li&ecirc;n hệ mua h&agrave;ng:0978716945</p>',
            'image' => '30124926_1912772195434371_5870364469858664448_n_600x900.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 120000,
            'qty' => 10,
        ]);

        DB::table('products')->insert([
            'type_id' => 2,
            'company_id' => 1,
            'name' => 'Găng tay xe máy EGO dài ngón',
            'title' => 'Găng tay xe máy EGO dài ngón',
            'description' => '<p><strong>Găng tay xe m&aacute;y</strong>&nbsp;EGO được rất nhiều người d&ugrave;ng ở Việt Nam ưa chuộng bởi sự tiện dụng, gọn nhẹ, dễ sử dụng, ph&ugrave; hợp cho nhiều ho&agrave;n cảnh kh&aacute;c nhau.</p>
<p>Thiết kế sợi tổng hợp bền bỉ, đ&agrave;n hồi cao, vừa c&oacute; thể d&ugrave;ng khi đi phố nhưng vẫn th&iacute;ch hợp cho những chuyến đi đường d&agrave;i.</p>
<p><img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20180111/6150472/gang_tay_xe_may.jpg" alt="" /></p>
<p>&nbsp;</p>
<p>EGO l&agrave; thương hiệu đồ bảo hộ moto rất nổi tiếng của Trung Quốc, c&aacute;c sản phẩm c&oacute; chất lượng ho&agrave;n thiện rất tốt c&ugrave;ng mức gi&aacute; phải chăng.</p>
<p>Găng tay xe m&aacute;y EGO d&agrave;i ng&oacute;n c&oacute; khả năng đ&agrave;n hồi tốt, kh&ocirc;ng b&iacute; kh&iacute;, &aacute;m m&ugrave;i. Nhờ đ&oacute; mang lại cảm gi&aacute;c sử dụng dễ chịu, &ecirc;m &aacute;i.</p>
<p>Để đảm bảo an to&agrave;n, nh&agrave; sản xuất t&iacute;ch hợp&nbsp;<strong>lớp g&ugrave; nhựa cứng</strong>&nbsp;ph&iacute;a dưới găng, n&oacute; hạn chế đ&aacute;ng kể va đập, tổn thương khi kh&ocirc;ng may sảy ra tai nạn, va chạm.</p>
<p>&nbsp;</p>
<p><img src="//cdn.nhanh.vn/cdn/store/5620/psCT/20180111/6150472/bao_tay_di_xe_may_cho_nam.jpg" alt="" width="1000" height="1000" /></p>
<p>Ph&iacute;a l&ograve;ng b&agrave;n tay, lớp da lộn được gia cố nhằm tăng khả năng chịu ma s&aacute;t, hạn chế trầy khi chống tay xuống đường. Lớp da lộn cũng gi&uacute;p tăng cảm gi&aacute;c cầm nắm tay l&aacute;i hay c&aacute;c đồ vật.</p>
<p>Đ&aacute;ng ch&uacute; &yacute; nhất,<strong>&nbsp;găng tay xe m&aacute;y EGO</strong>&nbsp;được&nbsp;<strong>t&iacute;ch hợp ph&iacute;m cảm ứng</strong>&nbsp;tại đầu ng&oacute;n trỏ. Nhờ vậy, người sử dụng c&oacute; thể thao t&aacute;c c&aacute;c chức năng cơ bản tr&ecirc;n smartphone m&agrave; kh&ocirc;ng cần th&aacute;o găng. Tr&ecirc;n thị trường, gần như chưa c&oacute; loại găng tay gi&aacute; rẻ n&agrave;o l&agrave;m được điều n&agrave;y.</p>
<p><strong>Th&ocirc;ng số kĩ thuật:</strong></p>
<p><em>M&agrave;u sắc: Đen, Đen Xanh, Đen cam</em></p>
<p><em>Size: L, XL</em></p>
<p>Do c&oacute; khả năng co gi&atilde;n, đ&agrave;n hồi tốt,&nbsp;<strong>găng tay xe m&aacute;y EGO</strong>&nbsp;c&oacute; thể sử dụng được cho cả nam v&agrave; nữ.</p>
<p>Nếu bạn quan t&acirc;m tới sản phẩm, vui l&ograve;ng li&ecirc;n hệ: <strong>0978716945&nbsp;</strong>để được tư vấn th&ocirc;ng tin chi tiết hơn hoặc hướng dẫn đặt h&agrave;ng, nhận h&agrave;ng tại nh&agrave; tr&ecirc;n to&agrave;n quốc.</p>',
            'image' => 'gang_tay_xe_may_1000x1000.jpg',
            'size_id' => '1',
            'color_id' => '1',
            'price' => 150000,
            'qty' => 10,
        ]);

        DB::table('bill')->insert([
            'user_id' => 1,
            'name_customer' => 'thu',
            'address_customer' => 'Thành Lộc -Hậu Lộc- Thanh Hóa',
            'phone_customer' => '0978716823',
            'amount' => 12,
            'status' => 1,
            'total' => 10,
            'type' =>'cod'
        ]);

        DB::table('shipper_oder')->insert([
            'user_id' => 1,
            'bill_id' => 1,
            'status' => 1,
        ]);

        DB::table('bill_detail')->insert([
            'bill_id' => 1,
            'product_id' => 1,
            'status' => 1,
            'qty' => 1,
        ]);

        DB::table('payment_log')->insert([
            'user_id' => 1,
            'time_request' => '2018-03-08',
            'request' => '111111',
            'response' => '1111111',
        ]);

        DB::table('cart')->insert([
            'user_id' => 1,
            'product_id' => 1,
            'number' => 1,
            'status' => 1,
        ]);

    }
}
