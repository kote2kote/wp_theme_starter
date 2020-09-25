// ===================================================
// チェックモード
// ===================================================

const checkMode = new Vue({
  el: '.check-mode__js',
  data: {
    isCheckMode: false,
    isCheckModeOuter: false,
    isCheckModeBl: false,
    isCheckModeEl: false,
    isShow: false,
      w: 0,
      h: 0,
      s: 0
  },
  mounted: function () {
    window.addEventListener('keyup', this.pressKey);
    this.w = window.innerWidth
    this.h = window.innerHeight
    this.s = window.pageYOffset + window.innerHeight / 2
    window.addEventListener('resize', this.resizeWindow)
    window.addEventListener('scroll', this.scrollWindow)
  },
  methods: {
    pressKey(e) {
      if (e.keyCode === 90) {
        // z
        this.isCheckMode = !this.isCheckMode;
      }
      if (e.keyCode === 88) {
        // x
        this.isCheckModeOuter = !this.isCheckModeOuter;
      }
      if (e.keyCode === 67) {
        // c
        this.isCheckModeBl = !this.isCheckModeBl;
      }
      if (e.keyCode === 86) {
        // v
        this.isCheckModeEl = !this.isCheckModeEl;
      }
      if (e.keyCode === 65) {
        // a
        this.isShow= !this.isShow;
        this.debagInfo();
        this.resizeWindow();
        this.scrollWindow();
      }
    },
    resizeWindow() {
      if (this.hidden !== true) {
        this.w = window.innerWidth
        this.h = window.innerHeight
      }
    },
    scrollWindow() {
      if (this.hidden !== true) {
        this.s = window.pageYOffset + window.innerHeight / 2
      }
    }
    // debagInfo () {
    //   setInterval(
    //     function () {
    //       if (this.isShow) {
    //         this.width = window.innerWidth;
    //         this.height = window.innerHeight;
    //         this.scroll = this.$el.getBoundingClientRect().top + window.pageYOffset;
    //         this.innerHTML = `w: ${this.width}px<br>
    //                       h: ${this.height}px<br>
    //                       s: ${this.scroll}px`;
    //       }
    //     }.bind(this),
    //     100
    //   );
    // },
  },
});
