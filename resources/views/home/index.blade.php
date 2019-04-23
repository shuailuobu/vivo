
@extends('layout.home')
@section('title','前台首页')
@section('luobu')




        <div class="vp-head-search-wrap">
          <div>
            <div class="vp-head-search-box">
              <div class="vp-head-search-btns">
                <span class="vp-head-search-confirm"></span>
                <span class="vp-head-search-close"></span>
              </div>
              <div class="vp-head-search-input">
                <input type="text" placeholder="搜索需要查找的内容">
              </div>
              <div class="vp-head-search-content">
                <div class="vp-head-search-recommend">
                  <dl>
                    <dt>全局搜索</dt>
                            <dd><a href="https://shopact.vivo.com.cn/page/iQOOyuyue" class="vp-head-search-recommend-dd"
                                   data-keyword="iQOO">iQOO</a></dd>
                            <dd><a href="https://shop.vivo.com.cn/product/10000058" class="vp-head-search-recommend-dd"
                                   data-keyword="NEX双屏版">NEX双屏版</a></dd>
                            <dd><a href="https://shop.vivo.com.cn/product/10486" class="vp-head-search-recommend-dd"
                                   data-keyword="X23">X23</a></dd>
                            <dd><a href="https://shop.vivo.com.cn/product/parts" class="vp-head-search-recommend-dd"
                                   data-keyword="手机配件">手机配件</a></dd>
                            <dd><a href="https://www.vivo.com.cn/service/map.html?VER=2017" class="vp-head-search-recommend-dd"
                                   data-keyword="服务网点查询">服务网点查询</a></dd>
                  </dl>
                </div>
                <div class="vp-head-search-result"></div>
                <div class="vp-head-search-tip">
                  <dl>
                    <dt>全局搜索</dt>
                    <dd>暂无匹配结果</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="vp-head-products-mask"></div>
        <div class="vp-head-menu-series">
          <div class="vp-head-series-wrapper">
                    <ul
                      class="vp-head-series-products vp-head-series-products-num2 vp-head-menu-series-list0"
                      data-series="iQOO专区">
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/iqoo"
                               data-head-click-stat="cfrom=1102&name=iQOO&series=iQOO专区">
                              <div class="vp-head-product-img-3">
                                    <div
                                      class="vp-head-product-img-3-3">
                                          <img  data-vp-head-src="./static/picture/b6c95df4e4fd799c6863eb30f3b1d81d.png" class="vp-head-lazyload" alt="iQOO">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-2">
                                          <img  data-vp-head-src="./static/picture/45c2bf8b60a273170977edbfe55367b8.png" alt="iQOO" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-1">
                                          <img  data-vp-head-src="./static/picture/2b12b816e6e346b638c7be427140a651.png" alt="iQOO" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">iQOO</p>
                                  <p class="vp-head-product-icon">新款</p>
                            </a>
                          </li>
                      <li>
                        <a href="https://www.vivo.com.cn/vivo/iqoo"
                           data-head-click-stat="cfrom=1102&name=全部iQOO机型&series=iQOO专区">
                          <div class="vp-head-product-img-default">
                            <div>
                              <svg viewBox="0 0 134 320">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-default-png"></use>
                              </svg>
                            </div>
                          </div>
                          <p class="vp-head-product-name">全部iQOO机型</p>
                        </a>
                      </li>
                    </ul>
                    <ul
                      class="vp-head-series-products vp-head-series-products-num4 vp-head-menu-series-list1"
                      data-series="NEX系列">
                          <li>
                            <a href="https://www.vivo.com/vivo/nexdualdisplay/"
                               data-head-click-stat="cfrom=1102&name=NEX双屏版&series=NEX系列">
                              <div class="vp-head-product-img-3">
                                    <div
                                      class="vp-head-product-img-3-3">
                                          <img  data-vp-head-src="./static/picture/a58a4ec2f519099c14d0fcd73f1d8aec.png" class="vp-head-lazyload" alt="NEX双屏版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-2">
                                          <img  data-vp-head-src="./static/picture/1838c95336b30043fa2981faa32937a1.png" alt="NEX双屏版" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-1">
                                          <img  data-vp-head-src="./static/picture/8cc9d05106aff4a3e8748730c96687d6.png" alt="NEX双屏版" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">NEX双屏版</p>
                                  <p class="vp-head-product-icon">新款</p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com/vivo/nexs/"
                               data-head-click-stat="cfrom=1102&name=NEX旗舰版&series=NEX系列">
                              <div class="vp-head-product-img-4">
                                    <div
                                      class="vp-head-product-img-4-4">
                                          <img  data-vp-head-src="./static/picture/826f33355eb36456c1cf48ef952b2603.png" class="vp-head-lazyload" alt="NEX旗舰版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-3">
                                          <img  data-vp-head-src="./static/picture/99ed1d51eb06cca2e8c37faa87007e14.png" class="vp-head-lazyload" alt="NEX旗舰版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-2">
                                          <img  data-vp-head-src="./static/picture/8a43ea78785ce40d57549cd4e55ee472.png" alt="NEX旗舰版" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-1">
                                          <img  data-vp-head-src="./static/picture/578e59296927cdaa2d0496e3ae4649ba.png" alt="NEX旗舰版" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">NEX旗舰版</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com/vivo/nex/"
                               data-head-click-stat="cfrom=1102&name=NEX&NEX屏幕指纹版&series=NEX系列">
                              <div class="vp-head-product-img-3">
                                    <div
                                      class="vp-head-product-img-3-3">
                                          <img  data-vp-head-src="./static/picture/d89018a178a5c9c511aece362ff85e8e.png" class="vp-head-lazyload" alt="NEX&NEX屏幕指纹版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-2">
                                          <img  data-vp-head-src="./static/picture/17c824d969c1c5cc53c003247ffa70a5.png" alt="NEX&NEX屏幕指纹版" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-1">
                                          <img  data-vp-head-src="./static/picture/a58140a62b1189f49ea4f3a0abedb664.png" alt="NEX&NEX屏幕指纹版" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">NEX&NEX屏幕指纹版</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                      <li>
                        <a href="https://www.vivo.com/products-nex.html"
                           data-head-click-stat="cfrom=1102&name=全部NEX机型&series=NEX系列">
                          <div class="vp-head-product-img-default">
                            <div>
                              <svg viewBox="0 0 134 320">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-default-png"></use>
                              </svg>
                            </div>
                          </div>
                          <p class="vp-head-product-name">全部NEX机型</p>
                        </a>
                      </li>
                    </ul>
                    <ul
                      class="vp-head-series-products vp-head-series-products-num6 vp-head-menu-series-list2"
                      data-series="X系列">
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/x27/"
                               data-head-click-stat="cfrom=1102&name=X27&series=X系列">
                              <div class="vp-head-product-img-3">
                                    <div
                                      class="vp-head-product-img-3-3">
                                          <img  data-vp-head-src="./static/picture/e8639c605d5bbeaa1b3dcc3b9301e59c.png" class="vp-head-lazyload" alt="X27">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-2">
                                          <img  data-vp-head-src="./static/picture/9a3b9980786ce78dd43dd61a273c35c5.png" alt="X27" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-1">
                                          <img  data-vp-head-src="./static/picture/9c66b9336d609c5c7e67d23ae984216e.png" alt="X27" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">X27</p>
                                  <p class="vp-head-product-icon">新款</p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com/vivo/x27pro/"
                               data-head-click-stat="cfrom=1102&name=X27 Pro&series=X系列">
                              <div class="vp-head-product-img-3">
                                    <div
                                      class="vp-head-product-img-3-3">
                                          <img  data-vp-head-src="./static/picture/192ee74f93753ea5b6fc2f58a4d3d76b.png" class="vp-head-lazyload" alt="X27 Pro">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-2">
                                          <img  data-vp-head-src="./static/picture/3c3ff64818f3219fcfc5277468bf70e6.png" alt="X27 Pro" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-1">
                                          <img  data-vp-head-src="./static/picture/d85bedb4bc4f6041461f4052cdafa592.png" alt="X27 Pro" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">X27 Pro</p>
                                  <p class="vp-head-product-icon">新款</p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/x27normal/"
                               data-head-click-stat="cfrom=1102&name=X27 8GB+128GB版&series=X系列">
                              <div class="vp-head-product-img-4">
                                    <div
                                      class="vp-head-product-img-4-4">
                                          <img  data-vp-head-src="./static/picture/4699a66fd95e58661d93e8285d21f4e1.png" class="vp-head-lazyload" alt="X27 8GB+128GB版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-3">
                                          <img  data-vp-head-src="./static/picture/9527adbf77f6e390adce1409a9e51901.png" class="vp-head-lazyload" alt="X27 8GB+128GB版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-2">
                                          <img  data-vp-head-src="./static/picture/7f26a80559f9af9937529237a0ccdc38.png" alt="X27 8GB+128GB版" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-1">
                                          <img  data-vp-head-src="./static/picture/abb6e8f5a31bc1bc3f58d697e545529b.png" alt="X27 8GB+128GB版" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">X27 8GB+128GB版</p>
                                  <p class="vp-head-product-icon">新款</p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/x23my/"
                               data-head-click-stat="cfrom=1102&name=X23 幻彩版&series=X系列">
                              <div class="vp-head-product-img-4">
                                    <div
                                      class="vp-head-product-img-4-4">
                                          <img  data-vp-head-src="./static/picture/2ad0b05207d4063d5f778586784c470d.png" class="vp-head-lazyload" alt="X23 幻彩版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-3">
                                          <img  data-vp-head-src="./static/picture/82e9700f9f64a7a97ea94a2307310dc2.png" class="vp-head-lazyload" alt="X23 幻彩版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-2">
                                          <img  data-vp-head-src="./static/picture/7a220736e3ce97cb0f8cc1714c8ddf6a.png" alt="X23 幻彩版" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-1">
                                          <img  data-vp-head-src="./static/picture/945f8e5e558e5067885669eb1d15dc36.png" alt="X23 幻彩版" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">X23 幻彩版</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/x23/"
                               data-head-click-stat="cfrom=1102&name=X23&series=X系列">
                              <div class="vp-head-product-img-5">
                                    <div
                                      class="vp-head-product-img-5-5">
                                          <img  data-vp-head-src="./static/picture/56976fdaf331aa58b13deafcdcbd3955.png" class="vp-head-lazyload" alt="X23">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-4">
                                          <img  data-vp-head-src="./static/picture/dd2bda401cef4da9699e0b8641ce4781.png" class="vp-head-lazyload" alt="X23">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-3">
                                          <img  data-vp-head-src="./static/picture/d6eafb02a8d71e1dc60a7923f813bd26.png" class="vp-head-lazyload" alt="X23">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-2">
                                          <img  data-vp-head-src="./static/picture/007024be15883e81fcaa03e5cf56fe4c.png" alt="X23" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-1">
                                          <img  data-vp-head-src="./static/picture/8881d96c3da9de0974b08b9fd82698be.png" alt="X23" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">X23</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                      <li>
                        <a href="https://www.vivo.com/products-x.html"
                           data-head-click-stat="cfrom=1102&name=全部X机型&series=X系列">
                          <div class="vp-head-product-img-default">
                            <div>
                              <svg viewBox="0 0 134 320">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-default-png"></use>
                              </svg>
                            </div>
                          </div>
                          <p class="vp-head-product-name">全部X机型</p>
                        </a>
                      </li>
                    </ul>
                    <ul
                      class="vp-head-series-products vp-head-series-products-num2 vp-head-menu-series-list3"
                      data-series="S系列">
                          <li>
                            <a href="http://www.vivo.com.cn/vivo/s1/"
                               data-head-click-stat="cfrom=1102&name=S1&series=S系列">
                              <div class="vp-head-product-img-3">
                                    <div
                                      class="vp-head-product-img-3-3">
                                          <img  data-vp-head-src="./static/picture/874c3b9e4125647fa4efd53dca61fcfe.png" class="vp-head-lazyload" alt="S1">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-2">
                                          <img  data-vp-head-src="./static/picture/8a526e82995f3f0bab5b21fcb5ec5918.png" alt="S1" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-1">
                                          <img  data-vp-head-src="./static/picture/080e589e8acae32856640bd632139dbb.png" alt="S1" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">S1</p>
                                  <p class="vp-head-product-icon">新款</p>
                            </a>
                          </li>
                      <li>
                        <a href="https://www.vivo.com.cn/products-s.html"
                           data-head-click-stat="cfrom=1102&name=全部S机型&series=S系列">
                          <div class="vp-head-product-img-default">
                            <div>
                              <svg viewBox="0 0 134 320">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-default-png"></use>
                              </svg>
                            </div>
                          </div>
                          <p class="vp-head-product-name">全部S机型</p>
                        </a>
                      </li>
                    </ul>
                    <ul
                      class="vp-head-series-products vp-head-series-products-num6 vp-head-menu-series-list4"
                      data-series="Z系列">
                          <li>
                            <a href="http://www.vivo.com.cn/vivo/z3/"
                               data-head-click-stat="cfrom=1102&name=Z3&series=Z系列">
                              <div class="vp-head-product-img-5">
                                    <div
                                      class="vp-head-product-img-5-5">
                                          <img  data-vp-head-src="./static/picture/4ed633c1a69348c2a71210a72e481fdb.png" class="vp-head-lazyload" alt="Z3">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-4">
                                          <img  data-vp-head-src="./static/picture/ae6ddbf81be96f42fe5df6058c1b05a5.png" class="vp-head-lazyload" alt="Z3">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-3">
                                          <img  data-vp-head-src="./static/picture/1e943d0a836eb2c9ea34ea46a867c7e6.png" class="vp-head-lazyload" alt="Z3">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-2">
                                          <img  data-vp-head-src="./static/picture/35783c892177135d09a7f4f3c1baa5b6.png" alt="Z3" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-1">
                                          <img  data-vp-head-src="./static/picture/a3119eb68c5fdd52285fe818e1139c06.png" alt="Z3" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">Z3</p>
                                  <p class="vp-head-product-icon">新款</p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/z3is/"
                               data-head-click-stat="cfrom=1102&name=Z3i标准版&series=Z系列">
                              <div class="vp-head-product-img-5">
                                    <div
                                      class="vp-head-product-img-5-5">
                                          <img  data-vp-head-src="./static/picture/35133158ad5fce1eff6b0b9e628a005a.png" class="vp-head-lazyload" alt="Z3i标准版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-4">
                                          <img  data-vp-head-src="./static/picture/6b26d8b17609b8581ec8755c0cb036b6.png" class="vp-head-lazyload" alt="Z3i标准版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-3">
                                          <img  data-vp-head-src="./static/picture/7047662b4168dab4560e9b6a7e3cafdf.png" class="vp-head-lazyload" alt="Z3i标准版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-2">
                                          <img  data-vp-head-src="./static/picture/45d3a6f97faeb5648d443f179dff0eb7.png" alt="Z3i标准版" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-1">
                                          <img  data-vp-head-src="./static/picture/64b26441209a4e6d3d1d044ce1992b42.png" alt="Z3i标准版" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">Z3i标准版</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/z1/"
                               data-head-click-stat="cfrom=1102&name=Z1&series=Z系列">
                              <div class="vp-head-product-img-5">
                                    <div
                                      class="vp-head-product-img-5-5">
                                          <img  data-vp-head-src="./static/picture/0e87bf579055d7c5a147752a7f97389c.png" class="vp-head-lazyload" alt="Z1">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-4">
                                          <img  data-vp-head-src="./static/picture/c69f092800a4af45b41c3bdfeade7e51.png" class="vp-head-lazyload" alt="Z1">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-3">
                                          <img  data-vp-head-src="./static/picture/03a3a9ecdf9ea54f41612caffcc5a364.png" class="vp-head-lazyload" alt="Z1">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-2">
                                          <img  data-vp-head-src="./static/picture/e2a21b92c17a1c887edad36d9fd95d2e.png" alt="Z1" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-1">
                                          <img  data-vp-head-src="./static/picture/08059806677d7e23e02cead89b6c9419.png" alt="Z1" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">Z1</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/z1lite/"
                               data-head-click-stat="cfrom=1102&name=Z1青春版&series=Z系列">
                              <div class="vp-head-product-img-4">
                                    <div
                                      class="vp-head-product-img-4-4">
                                          <img  data-vp-head-src="./static/picture/fc6f749d5c2ffdf28c16850cf5cf1206.png" class="vp-head-lazyload" alt="Z1青春版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-3">
                                          <img  data-vp-head-src="./static/picture/b0118bbb77b5b6ac902afae93e17c02d.png" class="vp-head-lazyload" alt="Z1青春版">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-2">
                                          <img  data-vp-head-src="./static/picture/d24a90fef34e6c7b13cbac7a28f445b0.png" alt="Z1青春版" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-1">
                                          <img  data-vp-head-src="./static/picture/22156dbacb9831af3316bb16ed0d5592.png" alt="Z1青春版" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">Z1青春版</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/z1i/"
                               data-head-click-stat="cfrom=1102&name=Z1i&series=Z系列">
                              <div class="vp-head-product-img-3">
                                    <div
                                      class="vp-head-product-img-3-3">
                                          <img  data-vp-head-src="./static/picture/8f0f89de11c02904e1302e92fcda8b0a.png" class="vp-head-lazyload" alt="Z1i">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-2">
                                          <img  data-vp-head-src="./static/picture/c66b5461e5b54f8673dcb4f6f71f004c.png" alt="Z1i" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-1">
                                          <img  data-vp-head-src="./static/picture/bde693547ad6141e65e0247674fff65d.png" alt="Z1i" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">Z1i</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                      <li>
                        <a href="https://www.vivo.com/products-z.html"
                           data-head-click-stat="cfrom=1102&name=全部Z机型&series=Z系列">
                          <div class="vp-head-product-img-default">
                            <div>
                              <svg viewBox="0 0 134 320">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-default-png"></use>
                              </svg>
                            </div>
                          </div>
                          <p class="vp-head-product-name">全部Z机型</p>
                        </a>
                      </li>
                    </ul>
                    <ul
                      class="vp-head-series-products vp-head-series-products-num5 vp-head-menu-series-list5"
                      data-series="Y系列">
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/y91/"
                               data-head-click-stat="cfrom=1102&name=Y91&series=Y系列">
                              <div class="vp-head-product-img-3">
                                    <div
                                      class="vp-head-product-img-3-3">
                                          <img  data-vp-head-src="./static/picture/b3c14baf3a5adbfe9a68664adfdda762.png" class="vp-head-lazyload" alt="Y91">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-2">
                                          <img  data-vp-head-src="./static/picture/c72331c3e6a7313051c73a2ef94926fe.png" alt="Y91" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-1">
                                          <img  data-vp-head-src="./static/picture/18e769c402067b90a0d6c9444952b6ac.png" alt="Y91" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">Y91</p>
                                  <p class="vp-head-product-icon">新款</p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/y93/"
                               data-head-click-stat="cfrom=1102&name=Y93&series=Y系列">
                              <div class="vp-head-product-img-3">
                                    <div
                                      class="vp-head-product-img-3-3">
                                          <img  data-vp-head-src="./static/picture/f607ffce501d27674549076d27b6b3b7.png" class="vp-head-lazyload" alt="Y93">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-2">
                                          <img  data-vp-head-src="./static/picture/0555e26fe292ff1fabfcb7f529301026.png" alt="Y93" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-3-1">
                                          <img  data-vp-head-src="./static/picture/728510b69b48b172e11ff43b7bd7c16f.png" alt="Y93" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">Y93</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/y93s/"
                               data-head-click-stat="cfrom=1102&name=Y93s&series=Y系列">
                              <div class="vp-head-product-img-5">
                                    <div
                                      class="vp-head-product-img-5-5">
                                          <img  data-vp-head-src="./static/picture/7e1f2a7c6b09e7913d02336cc28050bc.png" class="vp-head-lazyload" alt="Y93s">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-4">
                                          <img  data-vp-head-src="./static/picture/05eb64e7890b5e8c8e19892d937f064a.png" class="vp-head-lazyload" alt="Y93s">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-3">
                                          <img  data-vp-head-src="./static/picture/f6c83e6f896fe2d7e0f352b7bf629dfb.png" class="vp-head-lazyload" alt="Y93s">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-2">
                                          <img  data-vp-head-src="./static/picture/a8ec27339f2dba803165990580852f17.png" alt="Y93s" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-5-1">
                                          <img  data-vp-head-src="./static/picture/431c1e7a133b7cae61cbc7b069238ff7.png" alt="Y93s" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">Y93s</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/y85/"
                               data-head-click-stat="cfrom=1102&name=Y85&series=Y系列">
                              <div class="vp-head-product-img-4">
                                    <div
                                      class="vp-head-product-img-4-4">
                                          <img  data-vp-head-src="./static/picture/b91263a32d675b79195c018dbb876f5e.png" class="vp-head-lazyload" alt="Y85">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-3">
                                          <img  data-vp-head-src="./static/picture/604a651d418a8aae70ff412caa1de939.png" class="vp-head-lazyload" alt="Y85">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-2">
                                          <img  data-vp-head-src="./static/picture/29d5b2ef341ef9aa5f6afb1d43cb1374.png" alt="Y85" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-1">
                                          <img  data-vp-head-src="./static/picture/3d71e27d62055457f1f3150fb6aa766c.png" alt="Y85" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">Y85</p>
                                  <p class="vp-head-product-icon"></p>
                            </a>
                          </li>
                      <li>
                        <a href="https://www.vivo.com/products-y.html"
                           data-head-click-stat="cfrom=1102&name=全部Y机型&series=Y系列">
                          <div class="vp-head-product-img-default">
                            <div>
                              <svg viewBox="0 0 134 320">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-default-png"></use>
                              </svg>
                            </div>
                          </div>
                          <p class="vp-head-product-name">全部Y机型</p>
                        </a>
                      </li>
                    </ul>
                    <ul
                      class="vp-head-series-products vp-head-series-products-num2 vp-head-menu-series-list6"
                      data-series="U系列">
                          <li>
                            <a href="https://www.vivo.com.cn/vivo/u1/"
                               data-head-click-stat="cfrom=1102&name=U1&series=U系列">
                              <div class="vp-head-product-img-4">
                                    <div
                                      class="vp-head-product-img-4-4">
                                          <img  data-vp-head-src="./static/picture/5dc1d60eeada027208e3c60bd566156f.png" class="vp-head-lazyload" alt="U1">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-3">
                                          <img  data-vp-head-src="./static/picture/d471f0fb455ccace52b0eece00bc51b7.png" class="vp-head-lazyload" alt="U1">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-2">
                                          <img  data-vp-head-src="./static/picture/2a8192d26bd4658e24b30edc2f402eef.png" alt="U1" class="vp-head-prelazyload">

                                    </div>
                                    <div
                                      class="vp-head-product-img-4-1">
                                          <img  data-vp-head-src="./static/picture/f48fd7213d191dd7189797bde98f7c80.png" alt="U1" class="vp-head-prelazyload">

                                    </div>
                              </div>
                              <p class="vp-head-product-name">U1</p>
                                  <p class="vp-head-product-icon">新款</p>
                            </a>
                          </li>
                      <li>
                        <a href="https://www.vivo.com/products-u.html"
                           data-head-click-stat="cfrom=1102&name=全部U机型&series=U系列">
                          <div class="vp-head-product-img-default">
                            <div>
                              <svg viewBox="0 0 134 320">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-default-png"></use>
                              </svg>
                            </div>
                          </div>
                          <p class="vp-head-product-name">全部U机型</p>
                        </a>
                      </li>
                    </ul>
          </div>
        </div>
      </div>
    </div>
      <ul class="vp-head-user-lists">
        <div style="display: none">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol id="vp-head-myorder" viewBox="0 0 24 24"><path  d="M7.4,3C5.6,3.1,4.1,4.6,4.1,6.4v11.1c0,1.9,1.5,3.4,3.4,3.4c0,0,0,0,0,0h8.9c1.9,0,3.4-1.5,3.4-3.4c0,0,0,0,0,0
  V6.4c0-1.8-1.4-3.3-3.2-3.4"/><line  x1="7.7" y1="8.8" x2="16.3" y2="8.8"/><line  x1="7.7" y1="12" x2="16.3" y2="12"/><line  x1="7.7" y1="15.2" x2="16.3" y2="15.2"/><line  x1="9.3" y1="3" x2="14.7" y2="3"/></symbol><symbol id="vp-head-my" viewBox="0 0 24 24"><path  d="M19.2,21.1H4.8c-1,0-1.8-0.8-1.8-1.8c0,0,0-0.1,0-0.1L4,7.8c0.1-0.8,0.7-1.4,1.5-1.4h12.9
  c0.8,0,1.4,0.6,1.5,1.4L21,19.2c0.1,1-0.6,1.8-1.6,1.9C19.4,21.1,19.3,21.1,19.2,21.1z"/><path  d="M7.6,9.3V6.2c0.1-2.3,2.1-4,4.3-3.9l0,0c2.4,0,4.4,1.2,4.4,3.9v3.1"/></symbol><symbol id="vp-head-password" viewBox="0 0 24 24"><circle  cx="12" cy="7.8" r="4.7"/><path  d="M3.4,21.1c0-4.7,3.9-8.6,8.6-8.6c4.7,0,8.6,3.8,8.6,8.6"/></symbol>
          </svg>
        </div>
        <li><a href="//shop.vivo.com.cn/my/order" data-head-click-stat="cfrom=1107&position=2"><span>
          <svg viewBox="0 0 24 24"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-myorder"></use></svg>
          </span>我的订单</a></li>
        <li><a href="//shop.vivo.com.cn/my/" data-head-click-stat="cfrom=1107&position=3"><span>
            <svg viewBox="0 0 24 24"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-my"></use></svg>
          </span>我的商城</a></li>
        <li><a class="vp-head-user-home"
               href="//passport.vivo.com.cn/v3/web/login/authorize?client_id=3"
               data-head-click-stat="cfrom=1107&position=6"><span>
          <svg viewBox="0 0 24 24"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#vp-head-password"></use></svg>
        </span>帐号中心</a></li>
      </ul>
    </div>


  </div>
</div>

<script type="text/javascript" id="vp-head-header-script">
  var vpHeader = {
    pageType: 'pc',
    pageBoundary: null,
    clientId: '3',
    memberIsCus: false,
    headerType:0
  };
  var VP_Emmiter;
</script>



<div id="content" class="cl">
    <div class="banner">
        <div class="banner-wrapper">
            <ul class="img-list">
                    <li class="current" data-name="SMFK">
                        <div class="box">
                                <a target="_blank" href="https://shopact.vivo.com.cn/topic/TPejg75igymtc/index.html"><div class="structure-module">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="5.12" src="./static/picture/2019042209351546781_original.jpg">
        
    </div>
</div></a>
                        </div>
                    </li>
                    <li class="" data-name="iQOO开售">
                        <div class="box">
                                <a target="_blank" href="https://shop.vivo.com.cn/product/10000467"><div class="structure-module">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="5.12" data-original="https://shop./static.vivo.com.cn/vivoshop/commodity/20190418/20190418184735106927_original.jpg">
        
    </div>
</div></a>
                        </div>
                    </li>
                    <li class="" data-name="X27开售">
                        <div class="box">
                                <a target="_blank" href="https://shop.vivo.com.cn/product/10000534"><div class="structure-module">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="5.12" data-original="https://shop./static.vivo.com.cn/vivoshop/commodity/20190325/20190325184150955180_original.jpg">
        
    </div>
</div></a>
                        </div>
                    </li>
                    <li class="" data-name="S1">
                        <div class="box">
                                <a target="_blank" href="https://shop.vivo.com.cn/product/10000611"><div class="structure-module">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="5.12" data-original="https://shop./static.vivo.com.cn/vivoshop/commodity/20190404/20190404150632731921_original.jpg">
        
    </div>
</div></a>
                        </div>
                    </li>
                    <li class="" data-name="U1开售">
                        <div class="box">
                                <a target="_blank" href="https://shop.vivo.com.cn/product/10000443"><div class="structure-module">
    <div class="sm-wrapper">
        <img class="j_bgImage" data-ratio="5.12" data-original="https://shop./static.vivo.com.cn/vivoshop/commodity/20190326/20190326105902223719_original.jpg">
        
    </div>
</div></a>
                        </div>
                    </li>
            </ul>
        </div>
            <ul class="thumb-list">
                    <li class="current">
                        <span></span>
                        <div class="progress"></div>
                    </li>
                    <li>
                        <span></span>
                        <div class="progress"></div>
                    </li>
                    <li>
                        <span></span>
                        <div class="progress"></div>
                    </li>
                    <li>
                        <span></span>
                        <div class="progress"></div>
                    </li>
                    <li>
                        <span></span>
                        <div class="progress"></div>
                    </li>
            </ul>
    </div>
        <div class="wrapper">
            <ul class="category ">
                <li data-id="1">
                    <a class="category-name" href="/product/list-1">手机
                        <span class="arrow"></span>
                    </a>
                    <div class="category-box">
                        <div class="category-detail">
                            <a class="category-all" href="/product/list-1">全部手机&nbsp;<span class="arrow"></span></a>
                            <p>手机</p>
                                <ul class="category-sub has-border">
                                            <li><a href="https://shop.vivo.com.cn/product/list-527" data-src="https://shop./static.vivo.com.cn/vivoshop/commodity/category/1551438066242hd_312x100.jpg">iQOO</a></li>
                                            <li><a href="https://shop.vivo.com.cn/product/list-338" data-src="https://shop./static.vivo.com.cn/vivoshop/category/1530530826053hd_312x100.jpg">NEX系列</a></li>
                                            <li><a href="https://shop.vivo.com.cn/product/list-57" data-src="https://shop./static.vivo.com.cn/vivoshop/category/1537348549254hd_312x100.jpg">X系列</a></li>
                                            <li><a href="https://shop.vivo.com.cn/product/list-531" data-src="https://shop./static.vivo.com.cn/vivoshop/commodity/category/1553582605795hd_312x100.jpg">S系列</a></li>
                                            <li><a href="https://shop.vivo.com.cn/product/list-335" data-src="https://shop./static.vivo.com.cn/vivoshop/category/1541645495010hd_312x100.jpg">Z系列</a></li>
                                            <li><a href="https://shop.vivo.com.cn/product/list-7" data-src="https://shop./static.vivo.com.cn/vivoshop/category/1530530649218hd_312x100.png">Y系列</a></li>
                                            <li><a href="https://shop.vivo.com.cn/product/list-525" data-src="https://shop./static.vivo.com.cn/vivoshop/commodity/category/1550502144269hd_312x100.jpg">U系列</a></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <ul class="category-product">
                                            <li data-id="10000534">
                                                <a href="https://shop.vivo.com.cn/product/10000534?skuId=100739">
                                                    <img data-src="./static/picture/10000534_1552980516016_250x250.jpg">
                                                    <span>X27 8GB+256GB</span>
                                                </a>
                                            </li>
                                            <li data-id="10000467">
                                                <a href="https://shop.vivo.com.cn/product/10000467?skuId=100649">
                                                    <img data-src="./static/picture/10000467_1551438177210_250x250.jpg">
                                                    <span>iQOO 8GB+128GB</span>
                                                </a>
                                            </li>
                                            <li data-id="10000615">
                                                <a href="https://shop.vivo.com.cn/product/10000615?skuId=100800">
                                                    <img data-src="./static/picture/10000615_1553654165136_250x250.jpg">
                                                    <span>S1 6GB+128GB</span>
                                                </a>
                                            </li>
                                            <li data-id="10636">
                                                <a href="https://shop.vivo.com.cn/product/10636?skuId=5531">
                                                    <img data-src="./static/picture/10636_1543803921017_250x250.jpg">
                                                    <span>Z3 全面屏 6GB+64GB</span>
                                                </a>
                                            </li>
                                            <li data-id="10000690">
                                                <a href="https://shop.vivo.com.cn/product/10000690?skuId=100881">
                                                    <img data-src="./static/picture/10000690_1555057640621_250x250.jpg">
                                                    <span>iQOO 12GB+128GB</span>
                                                </a>
                                            </li>
                                            <li data-id="10000650">
                                                <a href="https://shop.vivo.com.cn/product/10000650?skuId=100841">
                                                    <img data-src="./static/picture/10000650_1554186931299_250x250.jpg">
                                                    <span>Z1青春版4GB+64GB</span>
                                                </a>
                                            </li>
                                            <li data-id="10000644">
                                                <a href="https://shop.vivo.com.cn/product/10000644?skuId=100834">
                                                    <img data-src="./static/picture/10000644_1553942982806_250x250.jpg">
                                                    <span>X27精英版 8GB+128GB</span>
                                                </a>
                                            </li>
                                            <li data-id="10000658">
                                                <a href="https://shop.vivo.com.cn/product/10000658?skuId=100857">
                                                    <img data-src="./static/picture/10000658_1554382401738_250x250.jpg">
                                                    <span>X27 Pro 8GB+256GB</span>
                                                </a>
                                            </li>
                                            <li data-id="10000511">
                                                <a href="https://shop.vivo.com.cn/product/10000511?skuId=100657">
                                                    <img data-src="./static/picture/10000511_1551447380836_250x250.jpg">
                                                    <span>iQOO Monster 12GB+256GB</span>
                                                </a>
                                            </li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li data-id="8">
                    <a class="category-name" href="/product/list-8">充电
                        <span class="arrow"></span>
                    </a>
                    <div class="category-box">
                        <div class="category-detail">
                            <a class="category-all" href="/product/list-8">全部充电&nbsp;<span class="arrow"></span></a>
                            <p>充电</p>
                                <ul class="category-product">
                                            <li data-id="10000654">
                                                <a href="https://shop.vivo.com.cn/product/10000654?skuId=100844">
                                                    <img data-src="./static/picture/10000654_1554199690028_250x250.jpg">
                                                    <span>vivo X27（8G+128G版）原装Type-C数据线</span>
                                                </a>
                                            </li>
                                            <li data-id="10000538">
                                                <a href="https://shop.vivo.com.cn/product/10000538?skuId=100683">
                                                    <img data-src="./static/picture/10000538_1552359498103_250x250.jpg">
                                                    <span>iQOO原装44W超快闪充充电器</span>
                                                </a>
                                            </li>
                                            <li data-id="10000535">
                                                <a href="https://shop.vivo.com.cn/product/10000535?skuId=100824">
                                                    <img data-src="./static/picture/10000535_1551939313207_250x250.jpg">
                                                    <span>X23/Z3原装闪充数据线</span>
                                                </a>
                                            </li>
                                            <li data-id="10425">
                                                <a href="https://shop.vivo.com.cn/product/10425?skuId=5157">
                                                    <img data-src="./static/picture/10425_1534842381523_250x250.png">
                                                    <span>原装Type-C数据线-2.25A</span>
                                                </a>
                                            </li>
                                            <li data-id="10424">
                                                <a href="https://shop.vivo.com.cn/product/10424?skuId=5156">
                                                    <img data-src="./static/picture/10424_1534841769313_250x250.png">
                                                    <span>原装10V/2.25A闪充充电器</span>
                                                </a>
                                            </li>
                                            <li data-id="10069">
                                                <a href="https://shop.vivo.com.cn/product/10069?skuId=4459">
                                                    <img data-src="./static/picture/10069_1534839319343_250x250.png">
                                                    <span>原装闪充数据线</span>
                                                </a>
                                            </li>
                                            <li data-id="249">
                                                <a href="https://shop.vivo.com.cn/product/249?skuId=4020">
                                                    <img data-src="./static/picture/249_1534842794682_250x250.png">
                                                    <span>原装9V/2A双引擎闪充</span>
                                                </a>
                                            </li>
                                            <li data-id="111">
                                                <a href="https://shop.vivo.com.cn/product/111?skuId=100217">
                                                    <img data-src="./static/picture/111_1534839266764_250x250.png">
                                                    <span>原装Micro USB数据线</span>
                                                </a>
                                            </li>
                                            <li data-id="10000539">
                                                <a href="https://shop.vivo.com.cn/product/10000539?skuId=100756">
                                                    <img data-src="./static/picture/10000539_1552360104721_250x250.jpg">
                                                    <span>iQOO原装闪电胶囊数据线</span>
                                                </a>
                                            </li>
                                            <li data-id="10000444">
                                                <a href="https://shop.vivo.com.cn/product/10000444?skuId=100566">
                                                    <img data-src="./static/picture/10000444_1550287124902_250x250.jpg">
                                                    <span>乔威 移动电源JP90ST</span>
                                                </a>
                                            </li>
                                            <li data-id="10208">
                                                <a href="https://shop.vivo.com.cn/product/10208?skuId=4766">
                                                    <img data-src="./static/picture/10208_1534841376477_250x250.png">
                                                    <span>飞毛腿 V10 移动电源</span>
                                                </a>
                                            </li>
                                            <li data-id="10000614">
                                                <a href="https://shop.vivo.com.cn/product/10000614?skuId=100799">
                                                    <img data-src="./static/picture/10000614_1553586771780_250x250.jpg">
                                                    <span>MGE Type-C金属编织数据线</span>
                                                </a>
                                            </li>
                                            <li data-id="10000284">
                                                <a href="https://shop.vivo.com.cn/product/10000284?skuId=100339">
                                                    <img data-src="./static/picture/10000284_1547124216214_250x250.jpg">
                                                    <span>vivo原装旅行充电器</span>
                                                </a>
                                            </li>
                                            <li data-id="10337">
                                                <a href="https://shop.vivo.com.cn/product/10337?skuId=4991">
                                                    <img data-src="./static/picture/10337_1534841462505_250x250.png">
                                                    <span>MGE 多彩数据线</span>
                                                </a>
                                            </li>
                                            <li data-id="10336">
                                                <a href="https://shop.vivo.com.cn/product/10336?skuId=4990">
                                                    <img data-src="./static/picture/10336_1534842312070_250x250.png">
                                                    <span>MGE 牛仔布数据线</span>
                                                </a>
                                            </li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li data-id="9">
                    <a class="category-name" href="/product/list-9">音乐
                        <span class="arrow"></span>
                    </a>
                    <div class="category-box">
                        <div class="category-detail">
                            <a class="category-all" href="/product/list-9">全部音乐&nbsp;<span class="arrow"></span></a>
                            <p>音乐</p>
                                <ul class="category-product">
                                            <li data-id="10689">
                                                <a href="https://shop.vivo.com.cn/product/10689?skuId=5635">
                                                    <img data-src="./static/picture/00_1540627445158_250x250.png">
                                                    <span>XE160原装耳机</span>
                                                </a>
                                            </li>
                                            <li data-id="9923">
                                                <a href="https://shop.vivo.com.cn/product/9923?skuId=4068">
                                                    <img data-src="./static/picture/4068_1531902211892hd_250x250.png">
                                                    <span>XE100原装耳机</span>
                                                </a>
                                            </li>
                                            <li data-id="10000254">
                                                <a href="https://shop.vivo.com.cn/product/10000254?skuId=100294">
                                                    <img data-src="./static/picture/10000254_1547172566853_250x250.jpg">
                                                    <span>蔚乐 棒棒糖音箱</span>
                                                </a>
                                            </li>
                                            <li data-id="10383">
                                                <a href="https://shop.vivo.com.cn/product/10383?skuId=5071">
                                                    <img data-src="./static/picture/5071_1531902328482hd_250x250.png">
                                                    <span>XE710原装耳机</span>
                                                </a>
                                            </li>
                                            <li data-id="9943">
                                                <a href="https://shop.vivo.com.cn/product/9943?skuId=4126">
                                                    <img data-src="./static/picture/4126_1497517577446hd_250x250.png">
                                                    <span>QCY Q25蓝牙耳机</span>
                                                </a>
                                            </li>
                                            <li data-id="90">
                                                <a href="https://shop.vivo.com.cn/product/90?skuId=1882">
                                                    <img data-src="./static/picture/1882_1531902270921hd_250x250.png">
                                                    <span>XE600i 原装耳机</span>
                                                </a>
                                            </li>
                                            <li data-id="10000705">
                                                <a href="https://shop.vivo.com.cn/product/10000705?skuId=100895">
                                                    <img data-src="./static/picture/10000705_1555145084794_250x250.png">
                                                    <span>出门问问 小问智能耳机增强版</span>
                                                </a>
                                            </li>
                                            <li data-id="10000354">
                                                <a href="https://shop.vivo.com.cn/product/10000354?skuId=100467">
                                                    <img data-src="./static/picture/10000354_1548236713522_250x250.jpg">
                                                    <span>西柚 蓝牙降噪耳机 X-PRO ANC</span>
                                                </a>
                                            </li>
                                            <li data-id="9934">
                                                <a href="https://shop.vivo.com.cn/product/9934?skuId=4100">
                                                    <img data-src="./static/picture/4100_1531902437342hd_250x250.png">
                                                    <span>XE680原装耳机</span>
                                                </a>
                                            </li>
                                            <li data-id="10411">
                                                <a href="https://shop.vivo.com.cn/product/10411?skuId=5139">
                                                    <img data-src="./static/picture/5139_1531902701330hd_250x250.png">
                                                    <span>天猫精灵M1</span>
                                                </a>
                                            </li>
                                            <li data-id="10404">
                                                <a href="https://shop.vivo.com.cn/product/10404?skuId=5131">
                                                    <img data-src="./static/picture/5131_1531902752370hd_250x250.png">
                                                    <span>西柚X-metal 头戴式蓝牙耳机</span>
                                                </a>
                                            </li>
                                            <li data-id="10719">
                                                <a href="https://shop.vivo.com.cn/product/10719?skuId=5696">
                                                    <img data-src="./static/picture/00_1541126606964_250x250.png">
                                                    <span>得胜&全民K歌 Q5手机麦克风</span>
                                                </a>
                                            </li>
                                            <li data-id="10408">
                                                <a href="https://shop.vivo.com.cn/product/10408?skuId=5135">
                                                    <img data-src="./static/picture/5135_1531902655164hd_250x250.png">
                                                    <span>ZACK 随享蓝牙音箱</span>
                                                </a>
                                            </li>
                                            <li data-id="10469">
                                                <a href="https://shop.vivo.com.cn/product/10469?skuId=5248">
                                                    <img data-src="./static/picture/10469_1535111455022_250x250.png">
                                                    <span>得胜 PH105手机麦克风</span>
                                                </a>
                                            </li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li data-id="73">
                    <a class="category-name" href="/product/list-73">配件
                        <span class="arrow"></span>
                    </a>
                    <div class="category-box">
                        <div class="category-detail">
                            <a class="category-all" href="/product/list-73">全部配件&nbsp;<span class="arrow"></span></a>
                            <p>配件</p>
                                <ul class="category-product">
                                            <li data-id="10000755">
                                                <a href="https://shop.vivo.com.cn/product/10000755?skuId=100956">
                                                    <img data-src="./static/picture/10000755_1555657258293_250x250.jpg">
                                                    <span>X27 软边透明手机保护壳 曜石黑</span>
                                                </a>
                                            </li>
                                            <li data-id="10000486">
                                                <a href="https://shop.vivo.com.cn/product/10000486?skuId=100622">
                                                    <img data-src="./static/picture/10000486_1550835581628_250x250.jpg">
                                                    <span>飞智 蜂刺手游按键</span>
                                                </a>
                                            </li>
                                            <li data-id="10000167">
                                                <a href="https://shop.vivo.com.cn/product/10000167?skuId=100186">
                                                    <img data-src="./static/picture/10000167_1545050981298_250x250.jpg">
                                                    <span>飞智 wee 2T游戏手柄</span>
                                                </a>
                                            </li>
                                            <li data-id="10000010">
                                                <a href="https://shop.vivo.com.cn/product/10000010?skuId=100039">
                                                    <img data-src="./static/picture/10000010_1547536957370_250x250.jpg">
                                                    <span>X23硅胶保护壳</span>
                                                </a>
                                            </li>
                                            <li data-id="10638">
                                                <a href="https://shop.vivo.com.cn/product/10638?skuId=5539">
                                                    <img data-src="./static/picture/10638_1539570622845_250x250.png">
                                                    <span>X23原装高透保护膜</span>
                                                </a>
                                            </li>
                                            <li data-id="10557">
                                                <a href="https://shop.vivo.com.cn/product/10557?skuId=5401">
                                                    <img data-src="./static/picture/10557_1543217205549_250x250.jpg">
                                                    <span>NEX&NEXS原装高透保护膜</span>
                                                </a>
                                            </li>
                                            <li data-id="10325">
                                                <a href="https://shop.vivo.com.cn/product/10325?skuId=4977">
                                                    <img data-src="./static/picture/10325_1535510295231_250x250.png">
                                                    <span>X21原装高透保护膜</span>
                                                </a>
                                            </li>
                                            <li data-id="10091">
                                                <a href="https://shop.vivo.com.cn/product/10091?skuId=4508">
                                                    <img data-src="./static/picture/10091_1534843087126_250x250.png">
                                                    <span>飞智 Wee拉伸手柄</span>
                                                </a>
                                            </li>
                                            <li data-id="10000445">
                                                <a href="https://shop.vivo.com.cn/product/10000445?skuId=100568">
                                                    <img data-src="./static/picture/10000445_1550298590191_250x250.jpg">
                                                    <span>Guildford手机桌面支架</span>
                                                </a>
                                            </li>
                                            <li data-id="10000372">
                                                <a href="https://shop.vivo.com.cn/product/10000372?skuId=100462">
                                                    <img data-src="./static/picture/10000372_1548388118567_250x250.jpg">
                                                    <span>NEX双屏版保护框</span>
                                                </a>
                                            </li>
                                            <li data-id="10000029">
                                                <a href="https://shop.vivo.com.cn/product/10000029?skuId=100059">
                                                    <img data-src="./static/picture/10000029_1543301589854_250x250.jpg">
                                                    <span>螃蟹壳二代游戏支架</span>
                                                </a>
                                            </li>
                                            <li data-id="10339">
                                                <a href="https://shop.vivo.com.cn/product/10339?skuId=4994">
                                                    <img data-src="./static/picture/10339_1539238646088_250x250.png">
                                                    <span>X21屏幕指纹保护壳</span>
                                                </a>
                                            </li>
                                            <li data-id="10166">
                                                <a href="https://shop.vivo.com.cn/product/10166?skuId=4693">
                                                    <img data-src="./static/picture/10166_1534843165694_250x250.png">
                                                    <span>ROCK 桌面手机支架</span>
                                                </a>
                                            </li>
                                            <li data-id="10763">
                                                <a href="https://shop.vivo.com.cn/product/10763?skuId=5759">
                                                    <img data-src="./static/picture/00_1541992286739_250x250.png">
                                                    <span>盖世小鸡 小鸡王座Z1游戏键盘</span>
                                                </a>
                                            </li>
                                            <li data-id="10000477">
                                                <a href="https://shop.vivo.com.cn/product/10000477?skuId=100608">
                                                    <img data-src="./static/picture/10413_1534843509476_250x250.png">
                                                    <span>闪迪至尊版存储卡</span>
                                                </a>
                                            </li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li data-id="72">
                    <a class="category-name" href="/product/list-72">智能
                        <span class="arrow"></span>
                    </a>
                    <div class="category-box">
                        <div class="category-detail">
                            <a class="category-all" href="/product/list-72">全部智能&nbsp;<span class="arrow"></span></a>
                            <p>智能</p>
                                <ul class="category-product">
                                            <li data-id="10000068">
                                                <a href="https://shop.vivo.com.cn/product/10000068?skuId=100092">
                                                    <img data-src="./static/picture/10000068_1543828629584_250x250.jpg">
                                                    <span>乐心手环Mambo5</span>
                                                </a>
                                            </li>
                                            <li data-id="10351">
                                                <a href="https://shop.vivo.com.cn/product/10351?skuId=5027">
                                                    <img data-src="./static/picture/5027_1532002886631hd_250x250.png">
                                                    <span>乐心手环3</span>
                                                </a>
                                            </li>
                                            <li data-id="10000746">
                                                <a href="https://shop.vivo.com.cn/product/10000746?skuId=100943">
                                                    <img data-src="./static/picture/10000746_1555580099969_250x250.png">
                                                    <span>欧瑞博 智能插座S30c</span>
                                                </a>
                                            </li>
                                            <li data-id="10000737">
                                                <a href="https://shop.vivo.com.cn/product/10000737?skuId=100933">
                                                    <img data-src="./static/picture/10000737_1555499131977_250x250.jpg">
                                                    <span>科沃斯 扫地机器人 DE53 黑</span>
                                                </a>
                                            </li>
                                            <li data-id="10000721">
                                                <a href="https://shop.vivo.com.cn/product/10000721?skuId=100939">
                                                    <img data-src="./static/picture/10000721_1555558438887_250x250.jpg">
                                                    <span>欧瑞博 小方智能遥控器CT10W </span>
                                                </a>
                                            </li>
                                            <li data-id="10000693">
                                                <a href="https://shop.vivo.com.cn/product/10000693?skuId=100882">
                                                    <img data-src="./static/picture/10000693_1555067245443_250x250.jpg">
                                                    <span>Sleepace 享睡纽扣B502T</span>
                                                </a>
                                            </li>
                                            <li data-id="10000612">
                                                <a href="https://shop.vivo.com.cn/product/10000612?skuId=100795">
                                                    <img data-src="./static/picture/10000612_1553568647496_250x250.jpg">
                                                    <span>BroadLink 智能插座SP mini3</span>
                                                </a>
                                            </li>
                                            <li data-id="9990">
                                                <a href="https://shop.vivo.com.cn/product/9990?skuId=4959">
                                                    <img data-src="./static/picture/4368_1532003405665hd_250x250.png">
                                                    <span>乐心智能手环ziva</span>
                                                </a>
                                            </li>
                                            <li data-id="10000739">
                                                <a href="https://shop.vivo.com.cn/product/10000739?skuId=100934">
                                                    <img data-src="./static/picture/10000739_1555502388656_250x250.jpg">
                                                    <span>科沃斯 扫地机器人 DS43 白</span>
                                                </a>
                                            </li>
                                            <li data-id="10000652">
                                                <a href="https://shop.vivo.com.cn/product/10000652?skuId=100843">
                                                    <img data-src="./static/picture/10000652_1554194311443_250x250.jpg">
                                                    <span>掌阅iReader Smart 超级智能本</span>
                                                </a>
                                            </li>
                                            <li data-id="10000651">
                                                <a href="https://shop.vivo.com.cn/product/10000651?skuId=100842">
                                                    <img data-src="./static/picture/10000651_1554192861162_250x250.jpg">
                                                    <span>掌阅iReader Ocean双系统版</span>
                                                </a>
                                            </li>
                                            <li data-id="10000613">
                                                <a href="https://shop.vivo.com.cn/product/10000613?skuId=100798">
                                                    <img data-src="./static/picture/10000613_1553584833927_250x250.jpg">
                                                    <span>雷士 智能吸顶灯</span>
                                                </a>
                                            </li>
                                            <li data-id="10000227">
                                                <a href="https://shop.vivo.com.cn/product/10000227?skuId=100261">
                                                    <img data-src="./static/picture/10000227_1545999720881_250x250.jpg">
                                                    <span>Sleepace 香薰助眠唤醒灯</span>
                                                </a>
                                            </li>
                                            <li data-id="10000011">
                                                <a href="https://shop.vivo.com.cn/product/10000011?skuId=100043">
                                                    <img data-src="./static/picture/10000011_1542781251927_250x250.jpg">
                                                    <span>科沃斯 扫地机器人DK36</span>
                                                </a>
                                            </li>
                                            <li data-id="10742">
                                                <a href="https://shop.vivo.com.cn/product/10742?skuId=5724">
                                                    <img data-src="./static/picture/00_1541488750902_250x250.png">
                                                    <span>乐心体脂秤S5mini</span>
                                                </a>
                                            </li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li data-id="165">
                    <a class="category-name" href="/product/list-165">摄影
                        <span class="arrow"></span>
                    </a>
                    <div class="category-box">
                        <div class="category-detail">
                            <a class="category-all" href="/product/list-165">全部摄影&nbsp;<span class="arrow"></span></a>
                            <p>摄影</p>
                                <ul class="category-product">
                                            <li data-id="10079">
                                                <a href="https://shop.vivo.com.cn/product/10079?skuId=4484">
                                                    <img data-src="./static/picture/4484_1508913199043hd_250x250.png">
                                                    <span>远点拍 蓝牙三脚架自拍杆</span>
                                                </a>
                                            </li>
                                            <li data-id="10402">
                                                <a href="https://shop.vivo.com.cn/product/10402?skuId=5124">
                                                    <img data-src="./static/picture/5124_1530264754347hd_250x250.png">
                                                    <span>飞宇 Vimble2手持稳定器</span>
                                                </a>
                                            </li>
                                            <li data-id="10407">
                                                <a href="https://shop.vivo.com.cn/product/10407?skuId=5134">
                                                    <img data-src="./static/picture/5134_1530602833758hd_250x250.png">
                                                    <span>Jji 迷你三脚架</span>
                                                </a>
                                            </li>
                                            <li data-id="10401">
                                                <a href="https://shop.vivo.com.cn/product/10401?skuId=5130">
                                                    <img data-src="./static/picture/5123_1530263062203hd_250x250.png">
                                                    <span>Jji 手机美颜补光灯</span>
                                                </a>
                                            </li>
                                            <li data-id="10741">
                                                <a href="https://shop.vivo.com.cn/product/10741?skuId=5723">
                                                    <img data-src="./static/picture/10741_1541657726660_250x250.png">
                                                    <span>猎奇 三合一手机镜头</span>
                                                </a>
                                            </li>
                                            <li data-id="9944">
                                                <a href="https://shop.vivo.com.cn/product/9944?skuId=4128">
                                                    <img data-src="./static/picture/4128_1481559221417_250x250.png">
                                                    <span>远点拍线控自拍杆</span>
                                                </a>
                                            </li>
                                            <li data-id="10479">
                                                <a href="https://shop.vivo.com.cn/product/10479?skuId=5250">
                                                    <img data-src="./static/picture/5250_1534734746129hd_250x250.png">
                                                    <span>Jji SS500 蓝牙补光自拍杆</span>
                                                </a>
                                            </li>
                                            <li data-id="10111">
                                                <a href="https://shop.vivo.com.cn/product/10111?skuId=4556">
                                                    <img data-src="./static/picture/4556_1512975135820hd_250x250.png">
                                                    <span>佳能 小型照片打印机</span>
                                                </a>
                                            </li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>
                    </div>
                </li>
                <li data-id="137">
                    <a class="category-name" href="/product/list-137">生活
                        <span class="arrow"></span>
                    </a>
                    <div class="category-box">
                        <div class="category-detail">
                            <a class="category-all" href="/product/list-137">全部生活&nbsp;<span class="arrow"></span></a>
                            <p>生活</p>
                                <ul class="category-product">
                                            <li data-id="10000704">
                                                <a href="https://shop.vivo.com.cn/product/10000704?skuId=100891">
                                                    <img data-src="./static/picture/10000704_1555142662456_250x250.jpg">
                                                    <span>V.FRIENDS摆件公仔</span>
                                                </a>
                                            </li>
                                            <li data-id="10000680">
                                                <a href="https://shop.vivo.com.cn/product/10000680?skuId=100868">
                                                    <img data-src="./static/picture/10000680_1554965316372_250x250.jpg">
                                                    <span>Oclean 智能声波电动牙刷</span>
                                                </a>
                                            </li>
                                            <li data-id="10000567">
                                                <a href="https://shop.vivo.com.cn/product/10000567?skuId=100730">
                                                    <img data-src="./static/picture/10000206_1545733640803_250x250.jpg">
                                                    <span>悦声 飞鸟集笔记本</span>
                                                </a>
                                            </li>
                                            <li data-id="10000481">
                                                <a href="https://shop.vivo.com.cn/product/10000481?skuId=100613">
                                                    <img data-src="./static/picture/10547_1540465977914_250x250.png">
                                                    <span>力博得声波牙刷SA·逸享</span>
                                                </a>
                                            </li>
                                            <li data-id="10000375">
                                                <a href="https://shop.vivo.com.cn/product/10000375?skuId=100463">
                                                    <img data-src="./static/picture/10000375_1548387052693_250x250.jpg">
                                                    <span>V.FRIENDS毛绒公仔</span>
                                                </a>
                                            </li>
                                            <li data-id="10000371">
                                                <a href="https://shop.vivo.com.cn/product/10000371?skuId=100459">
                                                    <img data-src="./static/picture/10000371_1548322527043_250x250.jpg">
                                                    <span>IMOVING 果冻行李箱</span>
                                                </a>
                                            </li>
                                            <li data-id="10000194">
                                                <a href="https://shop.vivo.com.cn/product/10000194?skuId=100212">
                                                    <img data-src="./static/picture/10000194_1545378133205_250x250.jpg">
                                                    <span>爱慕美 眼部按摩仪</span>
                                                </a>
                                            </li>
                                            <li data-id="10000168">
                                                <a href="https://shop.vivo.com.cn/product/10000168?skuId=100187">
                                                    <img data-src="./static/picture/10000168_1545051629071_250x250.jpg">
                                                    <span>素士 负离子吹风机H3S</span>
                                                </a>
                                            </li>
                                            <li data-id="10000553">
                                                <a href="https://shop.vivo.com.cn/product/10000553?skuId=100700">
                                                    <img data-src="./static/picture/10000553_1552531448630_250x250.jpg">
                                                    <span>Sleepace 享睡香薰块</span>
                                                </a>
                                            </li>
                                            <li data-id="10000134">
                                                <a href="https://shop.vivo.com.cn/product/10000134?skuId=100154">
                                                    <img data-src="./static/picture/10000134_1544585337225_250x250.jpg">
                                                    <span>摩乐吉 车载香薰</span>
                                                </a>
                                            </li>
                                            <li data-id="10000229">
                                                <a href="https://shop.vivo.com.cn/product/10000229?skuId=100267">
                                                    <img data-src="./static/picture/10000229_1546004498123_250x250.jpg">
                                                    <span>米客 牙刷单支装</span>
                                                </a>
                                            </li>
                                            <li data-id="10000228">
                                                <a href="https://shop.vivo.com.cn/product/10000228?skuId=100264">
                                                    <img data-src="./static/picture/10000228_1551775524673_250x250.jpg">
                                                    <span>sunflower 原力小背包</span>
                                                </a>
                                            </li>
                                            <li data-id="10000191">
                                                <a href="https://shop.vivo.com.cn/product/10000191?skuId=100209">
                                                    <img data-src="./static/picture/10000191_1545376574238_250x250.jpg">
                                                    <span>美的Midea 随行杯料理机</span>
                                                </a>
                                            </li>
                                            <li data-id="10405">
                                                <a href="https://shop.vivo.com.cn/product/10405?skuId=5132">
                                                    <img data-src="./static/picture/5132_1530599360088hd_250x250.png">
                                                    <span>CLICK立体防盗背包</span>
                                                </a>
                                            </li>
                                            <li data-id="10000332">
                                                <a href="https://shop.vivo.com.cn/product/10000332?skuId=100524">
                                                    <img data-src="./static/picture/10000332_1547805465770_250x250.jpg">
                                                    <span>AGVA 收纳包</span>
                                                </a>
                                            </li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                        </div>
                    </div>
                </li>
        </ul>
        </div>
<div class="wrapper">
    <ul class="floor-list">
            <li class="floor fp fp4">
                <ul class="box-list">
                                <li class="box">
                                    <a target="_blank" href="https://shop.vivo.com.cn/product/phone"
                                       >
                                        <img data-src="./static/picture/20190325204153676610_original.jpg">
                                    </a>
                                </li>
                                <li class="box">
                                    <a target="_blank" href="https://shop.vivo.com.cn/product/parts"
                                       >
                                        <img data-src="./static/picture/20190318121847915340_original.jpg">
                                    </a>
                                </li>
                                <li class="box">
                                    <a target="_blank" href="https://shopact.vivo.com.cn/page/recycle"
                                       >
                                        <img data-src="./static/picture/20190325203629635343_original.jpg">
                                    </a>
                                </li>
                                <li class="box">
                                    <a target="_blank" href="https://shopact.vivo.com.cn/page/tylazer01"
                                       >
                                        <img data-src="./static/picture/20190413152326868144_original.jpg">
                                    </a>
                                </li>
                </ul>
            </li>
            <li class="floor c_3">
                    <div class="info">
                        <p class="subject">热卖专区</p>
                            <ul class="more-wrapper">
                                    <li>
                                        <a target="_blank" href="/product/phone"  class="more">
                                            更多<i class="iconshop icon-arrow-r"></i>
                                        </a>
                                    </li>
                            </ul>
                    </div>
                <ul class="box-list">
                                <li class="box">
                                    <a target="_blank" data-name="Z1 青春版 4G+64G"
                                       href="/product/10000650?colorSkuid=100841">
                                            <img data-src="./static/picture/10000650_1554187406793_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    Z1 青春版 4G+64G-极光色
                                            </p>
                                            <ul class="color-list" data-name="Z1 青春版 4G+64G">
                                                        <li class=" selected"
                                                            style="background-color: #9A2EC2;background-image: linear-gradient(to right bottom, #9A2EC2, #0B2483);"
                                                            title="极光色"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/50/10000650_1554187406793_750x750.png"
                                                            data-href="/product/10000650?colorSkuid=100841"
                                                            data-skuid="100841"
                                                            data-price="1049"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #000000;background-image: linear-gradient(to right bottom, #000000, #000000);"
                                                            title="黑金"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/50/10000650_1555149598281_750x750.png"
                                                            data-href="/product/10000650?colorSkuid=100847"
                                                            data-skuid="100847"
                                                            data-price="949"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #c00000;background-image: linear-gradient(to right bottom, #c00000, #c00000);"
                                                            title="炫慕红"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/50/10000650_1554348899182_750x750.png"
                                                            data-href="/product/10000650?colorSkuid=100848"
                                                            data-skuid="100848"
                                                            data-price="949"
                                                            data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    Z1 青春版 4G+64G-3色可选
                                            </p>
                                            <p class="feature">14日-23日限时直降150元</p>
                                            <p class="price rmb-symbol">1049.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="X27 8G+128G版"
                                       href="/product/10000566?colorSkuid=100789">
                                            <img data-src="./static/picture/10000566_1553249395661_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    X27 8G+128G版-雀羽蓝
                                            </p>
                                            <ul class="color-list" data-name="X27 8G+128G版">
                                                        <li class=" selected"
                                                            style="background-color: #143983;background-image: linear-gradient(to right bottom, #143983, #37dbfb);"
                                                            title="雀羽蓝"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/66/10000566_1553249395661_750x750.png"
                                                            data-href="/product/10000566?colorSkuid=100789"
                                                            data-skuid="100789"
                                                            data-price="3198"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #fdf6eb;background-image: linear-gradient(to right bottom, #fdf6eb, #fbdde8);"
                                                            title="粉黛金"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/66/10000566_1553249456923_750x750.png"
                                                            data-href="/product/10000566?colorSkuid=100790"
                                                            data-skuid="100790"
                                                            data-price="3198"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #2dacc3;background-image: linear-gradient(to right bottom, #2dacc3, #002f40);"
                                                            title="翡翠色"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/66/10000566_1553480803282_750x750.png"
                                                            data-href="/product/10000566?colorSkuid=100788"
                                                            data-skuid="100788"
                                                            data-price="3198"
                                                            data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    X27 8G+128G版-3色可选
                                            </p>
                                            <p class="feature">12期免息|广角夜景三摄</p>
                                            <p class="price rmb-symbol">3198.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="Z3 6G+64G"
                                       href="/product/10636?colorSkuid=5531">
                                            <img data-src="./static/picture/5531_1539680128564hd_bi_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    Z3 6G+64G-极光蓝
                                            </p>
                                            <ul class="color-list" data-name="Z3 6G+64G">
                                                        <li class=" selected"
                                                            style="background-color: #1B31C1;background-image: linear-gradient(to right bottom, #1B31C1, #450B8E);"
                                                            title="极光蓝"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/31/5531_1539680128564hd_bi_750x750.png"
                                                            data-href="/product/10636?colorSkuid=5531"
                                                            data-skuid="5531"
                                                            data-price="1598"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #2dacc3;background-image: linear-gradient(to right bottom, #2dacc3, #002f40);"
                                                            title="翡翠色"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/36/10636_1551405263427_750x750.png"
                                                            data-href="/product/10636?colorSkuid=100640"
                                                            data-skuid="100640"
                                                            data-price="1898"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #FCDDEA;background-image: linear-gradient(to right bottom, #FCDDEA, #DAB0E4);"
                                                            title="梦幻粉"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/36/10636_1547429495004_750x750.png"
                                                            data-href="/product/10636?colorSkuid=100347"
                                                            data-skuid="100347"
                                                            data-price="1448"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #010102;background-image: linear-gradient(to right bottom, #010102, #151C8C);"
                                                            title="星夜黑"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/36/10636_1547429466551_750x750.png"
                                                            data-href="/product/10636?colorSkuid=100345"
                                                            data-skuid="100345"
                                                            data-price="1448"
                                                            data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    Z3 6G+64G-4色可选
                                            </p>
                                            <p class="feature">抢50元券|享3期免息</p>
                                            <p class="price rmb-symbol">1598.00</p>
                                        </div>
                                </li>
                </ul>
            </li>
            <li class="floor pc_6">
                    <div class="info">
                        <p class="subject">精品手机</p>
                            <ul class="more-wrapper">
                                    <li>
                                        <a target="_blank" href="/product/phone"  class="more">
                                            更多<i class="iconshop icon-arrow-r"></i>
                                        </a>
                                    </li>
                            </ul>
                    </div>
                <ul class="box-list">
                                <li class="box">
                                    <a target="_blank" data-name="U1 3+32版本"
                                       href="https://shop.vivo.com.cn/product/10000467?colorSkuid=100649">
                                            <img data-src="./static/picture/20190318115817259117_original.jpg"/>
                                    </a>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="U1  3G+32G"
                                       href="/product/10000443?colorSkuid=100579">
                                            <img data-src="./static/picture/10000443_1550486336987_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    U1  3G+32G-极光色
                                            </p>
                                            <ul class="color-list" data-name="U1  3G+32G">
                                                        <li class=" selected"
                                                            style="background-color: #9A2EC2;background-image: linear-gradient(to right bottom, #9A2EC2, #0B2483);"
                                                            title="极光色"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/43/10000443_1550486336987_750x750.png"
                                                            data-href="/product/10000443?colorSkuid=100579"
                                                            data-skuid="100579"
                                                            data-price="799"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #BC0413;background-image: linear-gradient(to right bottom, #BC0413, #750088);"
                                                            title="极光红"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/43/10000443_1550486327868_750x750.png"
                                                            data-href="/product/10000443?colorSkuid=100584"
                                                            data-skuid="100584"
                                                            data-price="1199"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #010102;background-image: linear-gradient(to right bottom, #010102, #151C8C);"
                                                            title="星夜黑"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/43/10000443_1550486305448_750x750.png"
                                                            data-href="/product/10000443?colorSkuid=100583"
                                                            data-skuid="100583"
                                                            data-price="1199"
                                                            data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    U1  3G+32G-3色可选
                                            </p>
                                            <p class="feature">购机赠200元超值配件券</p>
                                            <p class="price rmb-symbol">799.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="Z1青春版4G+32G"
                                       href="/product/10701?colorSkuid=5669">
                                            <img data-src="./static/picture/5669_1540984558348hd_bi_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    Z1青春版4G+32G-极光色
                                            </p>
                                            <ul class="color-list" data-name="Z1青春版4G+32G">
                                                        <li class=" selected"
                                                            style="background-color: #9A2EC2;background-image: linear-gradient(to right bottom, #9A2EC2, #0B2483);"
                                                            title="极光色"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/69/5669_1540984558348hd_bi_750x750.png"
                                                            data-href="/product/10701?colorSkuid=5669"
                                                            data-skuid="5669"
                                                            data-price="949"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #000000;background-image: linear-gradient(to right bottom, #000000, #000000);"
                                                            title="黑金"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/65/5665_1540984520216hd_bi_750x750.png"
                                                            data-href="/product/10701?colorSkuid=5665"
                                                            data-skuid="5665"
                                                            data-price="949"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #c00000;background-image: linear-gradient(to right bottom, #c00000, #c00000);"
                                                            title="炫慕红"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/68/5668_1540984538094hd_bi_750x750.png"
                                                            data-href="/product/10701?colorSkuid=5668"
                                                            data-skuid="5668"
                                                            data-price="949"
                                                            data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    Z1青春版4G+32G-3色可选
                                            </p>
                                            <p class="feature">18-23日限时直降50元</p>
                                            <p class="price rmb-symbol">949.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="S1 6G+128G"
                                       href="/product/10000611?colorSkuid=100796">
                                            <img data-src="./static/picture/10000611_1553583414306_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    S1 6G+128G-冰湖蓝
                                            </p>
                                            <ul class="color-list" data-name="S1 6G+128G">
                                                        <li class=" selected"
                                                            style="background-color: #082330;background-image: linear-gradient(to right bottom, #082330, #41bdea);"
                                                            title="冰湖蓝"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/11/10000611_1553583414306_750x750.png"
                                                            data-href="/product/10000611?colorSkuid=100796"
                                                            data-skuid="100796"
                                                            data-price="2298"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #ffe5df;background-image: linear-gradient(to right bottom, #ffe5df, #ffb7b2);"
                                                            title="宠爱粉"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/11/10000611_1553583418099_750x750.png"
                                                            data-href="/product/10000611?colorSkuid=100797"
                                                            data-skuid="100797"
                                                            data-price="2298"
                                                            data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    S1 6G+128G-2色可选
                                            </p>
                                            <p class="feature">新品推荐|加赠蓝牙耳机</p>
                                            <p class="price rmb-symbol">2298.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="Z3  4G+64G"
                                       href="/product/10559?colorSkuid=5551">
                                            <img data-src="./static/picture/5551_1539744789331hd_bi_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    Z3  4G+64G-极光蓝
                                            </p>
                                            <ul class="color-list" data-name="Z3  4G+64G">
                                                        <li class=" selected"
                                                            style="background-color: #1B31C1;background-image: linear-gradient(to right bottom, #1B31C1, #450B8E);"
                                                            title="极光蓝"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/51/5551_1539744789331hd_bi_750x750.png"
                                                            data-href="/product/10559?colorSkuid=5551"
                                                            data-skuid="5551"
                                                            data-price="1348"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #FCDDEA;background-image: linear-gradient(to right bottom, #FCDDEA, #DAB0E4);"
                                                            title="梦幻粉"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/52/5552_1539744807720hd_bi_750x750.png"
                                                            data-href="/product/10559?colorSkuid=5552"
                                                            data-skuid="5552"
                                                            data-price="1348"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #010102;background-image: linear-gradient(to right bottom, #010102, #151C8C);"
                                                            title="星夜黑"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/50/5550_1539744797877hd_bi_750x750.png"
                                                            data-href="/product/10559?colorSkuid=5550"
                                                            data-skuid="5550"
                                                            data-price="1348"
                                                            data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    Z3  4G+64G-3色可选
                                            </p>
                                            <p class="feature">抢50元券|加赠耳机</p>
                                            <p class="price rmb-symbol">1348.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="U1  3G+64G"
                                       href="/product/10000463?colorSkuid=100587">
                                            <img data-src="./static/picture/10000463_1550558147461_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    U1  3G+64G-星夜黑
                                            </p>
                                            <ul class="color-list" data-name="U1  3G+64G">
                                                        <li class=" selected"
                                                            style="background-color: #010102;background-image: linear-gradient(to right bottom, #010102, #151C8C);"
                                                            title="星夜黑"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/63/10000463_1550558147461_750x750.png"
                                                            data-href="/product/10000463?colorSkuid=100587"
                                                            data-skuid="100587"
                                                            data-price="999"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #9A2EC2;background-image: linear-gradient(to right bottom, #9A2EC2, #0B2483);"
                                                            title="极光色"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/63/10000463_1550558177072_750x750.png"
                                                            data-href="/product/10000463?colorSkuid=100589"
                                                            data-skuid="100589"
                                                            data-price="999"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #BC0413;background-image: linear-gradient(to right bottom, #BC0413, #750088);"
                                                            title="极光红"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/63/10000463_1550558170714_750x750.png"
                                                            data-href="/product/10000463?colorSkuid=100588"
                                                            data-skuid="100588"
                                                            data-price="999"
                                                            data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    U1  3G+64G-3色可选
                                            </p>
                                            <p class="feature">14-20日限时直降100元</p>
                                            <p class="price rmb-symbol">999.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="Z3  6G+128G"
                                       href="/product/10637?colorSkuid=5534">
                                            <img data-src="./static/picture/5534_1539680691169hd_bi_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    Z3  6G+128G-极光蓝
                                            </p>
                                            <ul class="color-list" data-name="Z3  6G+128G">
                                                        <li class=" selected"
                                                            style="background-color: #1B31C1;background-image: linear-gradient(to right bottom, #1B31C1, #450B8E);"
                                                            title="极光蓝"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/34/5534_1539680691169hd_bi_750x750.png"
                                                            data-href="/product/10637?colorSkuid=5534"
                                                            data-skuid="5534"
                                                            data-price="1898"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #FCDDEA;background-image: linear-gradient(to right bottom, #FCDDEA, #DAB0E4);"
                                                            title="梦幻粉"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/35/5535_1539680719252hd_bi_750x750.png"
                                                            data-href="/product/10637?colorSkuid=5535"
                                                            data-skuid="5535"
                                                            data-price="1898"
                                                            data-saleable=""></li>
                                                        <li class=" "
                                                            style="background-color: #010102;background-image: linear-gradient(to right bottom, #010102, #151C8C);"
                                                            title="星夜黑"
                                                            data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/33/5533_1539680658886hd_bi_750x750.png"
                                                            data-href="/product/10637?colorSkuid=5533"
                                                            data-skuid="5533"
                                                            data-price="1898"
                                                            data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    Z3  6G+128G-3色可选
                                            </p>
                                            <p class="feature">享3期免息|加赠耳机</p>
                                            <p class="price rmb-symbol">1898.00</p>
                                        </div>
                                </li>
                </ul>
            </li>
            <li class="floor c_8">
                    <div class="info">
                        <p class="subject">精品配件</p>
                            <ul class="more-wrapper">
                                    <li>
                                        <a target="_blank" href="/product/parts?category=8" >
                                            充电
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="/product/parts?category=73" >
                                            配件
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="/product/parts?category=9" >
                                            音乐
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="/product/parts"  class="more">
                                            更多<i class="iconshop icon-arrow-r"></i>
                                        </a>
                                    </li>
                            </ul>
                    </div>
                <ul class="box-list">
                                <li class="box">
                                    <a target="_blank" data-name="XE160原装耳机"
                                       href="/product/10689?colorSkuid=5635">
                                            <img data-src="./static/picture/5635_1540627442014hd_bi_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    XE160原装耳机-白色
                                            </p>
                                            <ul class="color-list" data-name="XE160原装耳机">
                                                    <li class="white selected"
                                                        style="background-color: #ffffff"
                                                        title="白色"
                                                        data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/35/5635_1540627442014hd_bi_750x750.png"
                                                        data-href="/product/10689?colorSkuid=5635"
                                                        data-skuid="5635"
                                                        data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    XE160原装耳机-白色
                                            </p>
                                            <p class="feature">无缝贴合人耳|佩戴舒适</p>
                                            <p class="price rmb-symbol">69.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="X27 珠光磨砂手机壳 "
                                       href="/product/10000756?colorSkuid=100949">
                                            <img data-src="./static/picture/10000756_1555658140000_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    X27 珠光磨砂手机壳 -黑色
                                            </p>
                                            <ul class="color-list" data-name="X27 珠光磨砂手机壳 ">
                                                    <li class=" selected"
                                                        style="background-color: #262626"
                                                        title="黑色"
                                                        data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/56/10000756_1555658140000_750x750.png"
                                                        data-href="/product/10000756?colorSkuid=100949"
                                                        data-skuid="100949"
                                                        data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    X27 珠光磨砂手机壳 -黑色
                                            </p>
                                            <p class="feature">全面保护|珠光磨砂材质</p>
                                            <p class="price rmb-symbol">39.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="智能插座SP mini3"
                                       href="/product/10000612?colorSkuid=100795">
                                            <img data-src="./static/picture/10000612_1553568955803_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    智能插座SP mini3-白色
                                            </p>
                                            <ul class="color-list" data-name="智能插座SP mini3">
                                                    <li class="white selected"
                                                        style="background-color: #ffffff"
                                                        title="白色"
                                                        data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/12/10000612_1553568955803_750x750.png"
                                                        data-href="/product/10000612?colorSkuid=100795"
                                                        data-skuid="100795"
                                                        data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    智能插座SP mini3-白色
                                            </p>
                                            <p class="feature">新品推荐|wifi智能插座</p>
                                            <p class="price rmb-symbol">45.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="乔威 移动电源JP90ST"
                                       href="/product/10000444?colorSkuid=100566">
                                            <img data-src="./static/picture/10000444_1550287153298_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    乔威 移动电源JP90ST-黑色
                                            </p>
                                            <ul class="color-list" data-name="乔威 移动电源JP90ST">
                                                    <li class=" selected"
                                                        style="background-color: #262626"
                                                        title="黑色"
                                                        data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/44/10000444_1550287153298_750x750.png"
                                                        data-href="/product/10000444?colorSkuid=100566"
                                                        data-skuid="100566"
                                                        data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    乔威 移动电源JP90ST-黑色
                                            </p>
                                            <p class="feature">双快充|3A大电流输出</p>
                                            <p class="price rmb-symbol">199.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="乐心手环Mambo5"
                                       href="/product/10000068?colorSkuid=100092">
                                            <img data-src="./static/picture/10000068_1543828650179_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    乐心手环Mambo5-黑色
                                            </p>
                                            <ul class="color-list" data-name="乐心手环Mambo5">
                                                    <li class=" selected"
                                                        style="background-color: #262626"
                                                        title="黑色"
                                                        data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/68/10000068_1543828650179_750x750.png"
                                                        data-href="/product/10000068?colorSkuid=100092"
                                                        data-skuid="100092"
                                                        data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    乐心手环Mambo5-黑色
                                            </p>
                                            <p class="feature">24小时心率监测|30天长久续航</p>
                                            <p class="price rmb-symbol">149.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="欧瑞博 RGB灯带"
                                       href="/product/10000741?colorSkuid=100940">
                                            <img data-src="./static/picture/10000741_1555559430531_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    欧瑞博 RGB灯带-白色
                                            </p>
                                            <ul class="color-list" data-name="欧瑞博 RGB灯带">
                                                    <li class="white selected"
                                                        style="background-color: #ffffff"
                                                        title="白色"
                                                        data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/41/10000741_1555559430531_750x750.png"
                                                        data-href="/product/10000741?colorSkuid=100940"
                                                        data-skuid="100940"
                                                        data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    欧瑞博 RGB灯带-白色
                                            </p>
                                            <p class="feature">4.18-4.24限时直降20元</p>
                                            <p class="price rmb-symbol">179.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name=" 香薰助眠唤醒灯"
                                       href="/product/10000227?colorSkuid=100261">
                                            <img data-src="./static/picture/10000227_1545999758575_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                     香薰助眠唤醒灯-白色
                                            </p>
                                            <ul class="color-list" data-name=" 香薰助眠唤醒灯">
                                                    <li class="white selected"
                                                        style="background-color: #ffffff"
                                                        title="白色"
                                                        data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/27/10000227_1545999758575_750x750.png"
                                                        data-href="/product/10000227?colorSkuid=100261"
                                                        data-skuid="100261"
                                                        data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                     香薰助眠唤醒灯-白色
                                            </p>
                                            <p class="feature">限时特价|支持Jovi物联</p>
                                            <p class="price rmb-symbol">279.00</p>
                                        </div>
                                </li>
                                <li class="box">
                                    <a target="_blank" data-name="手机桌面支架"
                                       href="/product/10000445?colorSkuid=100568">
                                            <img data-src="./static/picture/10000445_1550288354521_750x750.png"/>
                                    </a>
                                        <div class="color-wrapper">
                                            <p class="name">
                                                    手机桌面支架-银色
                                            </p>
                                            <ul class="color-list" data-name="手机桌面支架">
                                                    <li class=" selected"
                                                        style="background-color: #bfbfbf"
                                                        title="银色"
                                                        data-img="https://shop./static.vivo.com.cn/vivoshop/commodity/45/10000445_1550288354521_750x750.png"
                                                        data-href="/product/10000445?colorSkuid=100568"
                                                        data-skuid="100568"
                                                        data-saleable=""></li>
                                            </ul>
                                        </div>
                                        <div class="prodinfo">
                                            <p class="name">
                                                    手机桌面支架-银色
                                            </p>
                                            <p class="feature">支持270°转动</p>
                                            <p class="price rmb-symbol">39.00</p>
                                        </div>
                                </li>
                </ul>
            </li>
    </ul>
</div>
<script type="text/html" id="newbieTpl">
    <div class="popup-gift">
        <a href="javascript:;">
            <img src="./static/picture/popup-gift_9c2c880.png" alt="">
        </a>
    </div>
    <div class="dialog-gift">
        <a href="javascript:;">
            <div class="img-box">
                <i>
                    <img src="./static/picture/home-quit-icon_b05496f.png" alt="" class="quit-icon">
                </i>
                <img src="./static/picture/gift-dialog_47444e8.png" alt="" class="dialog-img">
            </div>
        </a>
    </div>
</script>


</div>

    <div class="shop-foot-area home-foot-area">
<div class="wrapper cl">
    <ul class="vvs-agree">
        <li class="vvs-agree-item">
            <a href="javascript:;" data-vs="12,1,信任图标,,">
                <b class="iconshop icon-just01"></b>官方正品
            </a>
        </li>
        <li class="vvs-agree-item">
            <a href="javascript:;" data-vs="12,2,信任图标,,">
                <b class="iconshop icon-just02"></b>顺丰极速达
            </a>
        </li>
        <li class="vvs-agree-item">
            <a href="javascript:;" data-vs="12,3,信任图标,,">
                <b class="iconshop icon-just04"></b>全国联保
            </a>
        </li>
        <li class="vvs-agree-item">
            <a href="javascript:;" data-vs="12,4,信任图标,,">
                <b class="iconshop icon-just03"></b>镭雕定制
            </a>
        </li>
    </ul>
</div>
    </div>
 
@endsection