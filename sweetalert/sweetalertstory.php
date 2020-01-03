<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>story</title>
  <script src="plugs/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="plugs/sweetalert2.min.css" />
  <link rel="stylesheet" href="plugs/bootstrap.css">
</head>
<style>
  body {
    background-image: url("images/background1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100vh;
    background-attachment: fixed;
  }
</style>

<body>
  <script>
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-primary',
        cancelButton: 'btn btn-primary'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: '請輸入勇者大名?',
      text: "★準備好進入勇者世界!",
      input: 'text',
      // icon: 'warning',
      showCancelButton: true,
      confirmButtonText: `拿出勇氣進入!"`,
      cancelButtonText: '不打名字是??!',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        swalWithBootstrapButtons.fire({
            title: '歡迎極光世界',
            text: '這世界充滿未知,溫度極低隨時你會葛闢在這裡,所以趕快拿保暖衣物、足夠糧食、記得帶飲料不然渴死,話不多說我們就出發!!',
            reverseButtons: true,
            confirmButtonText: '走吧!',
            // a = result.value,
            // 故事開始
          },
          // console.log(result)
        ).then((result) => {
          swalWithBootstrapButtons.fire({
              title: '黎明女神:',
              text: `告訴勇者等等請往北方45度方向走,你會看一艘船在哪等候,那邊有位船夫正在等你,
                          勇者確實看到黎明女神所說船夫,但為何是兩艘船??上前時,船夫說小子你要去哪?`,
              showCancelButton: true,
              reverseButtons: true,
              confirmButtonText: '費爾班克斯!',
              cancelButtonText: '特羅姆瑟',
            }, 
            ).then((result) => {
              if (result.value) {
                swalWithBootstrapButtons.fire({
                    title: '費爾班克斯!',
                    text: `勇者,來到一間旅館,發現一幅畫,畫上的女人有點熟悉。
                            回想一下,這難道是黎明女神年輕時候!!!
                            眉頭深鎖,內心os:這隔壁是誰??怎麼這麼老,這是傳說中老少配嘛!`,
                    imageUrl: 'images/4bdbe7d63426c.jpg',
                    imageWidth: 400,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                    showCancelButton: true,
                    confirmButtonText: '讓我們繼續看下去',
                    cancelButtonText: '= = 你家務事,有問過我想知道的感受??',
                    reverseButtons: true,
                  }, 
                  // console.log(123)
                  ).then((result) => {
                    if (result.value) {
                      swalWithBootstrapButtons.fire({
                        imageUrl: 'images/fa.jpg',
                        imageWidth: 400,
                        imageHeight: 300,
                        text: `小編說:這男子是黎明女神的愛人[提托諾斯],女神請求他的父親[宙斯]給予他愛人長生不死,宙斯准許,但[提托諾斯]去一直老下去,不像女神永遠青春。
                               ,女神不捨[提托諾斯]越來越老,把他的愛人變成蟋蟀,[提托諾斯]失去說話能力,每天只能用蟋蟀唧唧唧唧地鳴叫聲陪伴她`,
                        reverseButtons: true,
                        confirmButtonText: 'end~!'
                      })
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                      swalWithBootstrapButtons.fire({
                        title: '事實證明',
                        imageUrl: 'images/1490166897311.jpg',
                        imageWidth: 400,
                        imageHeight: 300,
                        imageAlt: 'Custom image',
                      })
                    }
                  })
              } else if (result) {
                swalWithBootstrapButtons.fire({
                  title: '特羅姆瑟',
                  text: `船夫說著:歐若拉是掌管北極光的女神，自古人們便流傳著：若是見到了歐若拉，就可以遇見幸福。
                                你是要去特羅姆瑟完成什麼任務嗎?`,
                  imageUrl: 'images/Tromso_Norway.jpg',
                  imageWidth: 400,
                  imageHeight: 300,
                  imageAlt: 'Custom image',
                  reverseButtons: true,
                  confirmButtonText: '強迫看下去!'
                }).then((result) => {
                  swalWithBootstrapButtons.fire({
                    title: '求勇者陰影面~!!',
                    text: `勇者心想:感覺會有好康!真的能遇到幸福嗎? 走著想著不小新撞到一位氣質美女~就在勇者腦補同時,
                                                美女一轉身:先生走路看路好嗎?`,
                    reverseButtons: true,
                    confirmButtonText: 'the end~',
                    imageUrl: 'images/11.jpg',
                    imageWidth: 400,
                    imageHeight: 300,
                    imageAlt: 'Custom image',
                  }).then((result) => {
                    swalWithBootstrapButtons.fire({
                      title: '我要去搬磚頭!!',
                      imageUrl: 'images/123.jpg',
                      imageHeight: 300,
                      imageWidth: 300,
                      imageAlt: 'Custom image',
                      confirmButtonText: 'the end~',
                    })
                  })

                })
              }
            })
        })
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire({
          title: '你還好嘛? 請按F5再來一次',
          imageUrl: 'images/0.webp',
          imageWidth: 400,
          imageHeight: 300,
          imageAlt: 'Custom image',
        })
      }
    })
  </script>

</body>

</html>