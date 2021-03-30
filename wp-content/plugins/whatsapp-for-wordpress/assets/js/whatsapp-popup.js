(function($) {
  $(document).ready(function() {
    $("#wa").njtWhatsApp({
      accounts: njt_wa.accounts,
      timezone: njt_wa_global.timezone,
      gdprStatus: njt_wa.gdprStatus,
      defaultAvatar: njt_wa_global.defaultAvatarSVG,
      options: njt_wa.options,
    });
  });
})(jQuery);
