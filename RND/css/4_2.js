function detailedStatusListToolTip(){this.xOffset=0,this.yOffset=10,apex.jQuery("ul.detailedStatusList > li[class!=detailedStatusListLegend]").hover(function(a){var b=apex.jQuery("section.detailedListTooltip",this).html();this.top=a.pageY+yOffset,this.left=a.pageX+xOffset,apex.jQuery("body").append('<div id="detailedStatusListToolTip">'+b+"</div>"),apex.jQuery("div#detailedStatusListToolTip").css("top",this.top+"px").css("left",this.left+"px").delay(500).fadeIn("fast")},function(){apex.jQuery("div#detailedStatusListToolTip").fadeOut("false").remove()}).mousemove(function(a){this.top=a.pageY+yOffset,this.left=a.pageX+xOffset,apex.jQuery("div#detailedStatusListToolTip").css("top",this.top+"px").css("left",this.left+"px")})}function initLightbox(){apex.jQuery("body").append('<div id="modalBackground"></div>'),gBackground=apex.jQuery("#modalBackground"),gBackground.click(function(){gBackground.fadeOut(100),closeModal()})}function closeModal(){gLightbox&&(gLightbox.removeClass("modalOn").hide(),gLightbox=""),gBackground.fadeOut(100)}function openModal(a){gBackground.fadeIn(100),gLightbox=apex.jQuery("#"+a),gLightbox.addClass("modalOn").fadeIn(100)}function expandSection(a){section=a,all_sections=apex.jQuery("div.uFrameMain section.uHideShowRegion"),all_sections.each(function(){current=apex.jQuery(this),current.attr("id")==section?(current.find("div.uRegionContent").show(),current.find("a.uRegionControl").removeClass("uRegionCollapsed")):(current.find("div.uRegionContent").hide(),current.find("a.uRegionControl").addClass("uRegionCollapsed"))})}function expandAllSections(){apex.jQuery("div.uFrameMain section.uHideShowRegion").each(function(){current=apex.jQuery(this),current.find("div.uRegionContent").show(),current.find("a.uRegionControl").removeClass("uRegionCollapsed")})}function showGrid(){apex.jQuery(".apex_grid_container").addClass("showGrid")}function hideGrid(){apex.jQuery(".apex_grid_container").removeClass("showGrid")}function loadItemHelp(){apex.jQuery("span.uItemHelp").each(function(){var a=apex.jQuery(this),b=apex.jQuery(this).attr("data-item-id");apex.jQuery(a).text().length>0?apex.jQuery("#hb_"+b).show():apex.jQuery("#hb_"+b).detach()})}function uShowItemHelp(a){var b=apex.jQuery('span[data-item-id="'+apex.util.escapeCSS(a)+'"]').html(),c=apex.jQuery('label[for="'+apex.util.escapeCSS(a)+'"]').text(),d=apex.jQuery("#apex_popup_field_help");d.length===0?(d=apex.jQuery('<div id="apex_popup_field_help">'+b+"</div>"),d.dialog({title:c,closeOnEscape:!0})):d.html(b).dialog("option","title",c).dialog("open")}function loadWizardTrain(){var a=apex.jQuery("li.current,li.first-current,li.last-current",".uHorizontalProgressList");a.prev().length>0&&a.prevAll().find("span").addClass("pastCurrent")}"article aside footer header hgroup nav section time".replace(/\w+/g,function(a){document.createElement(a)}),apex.jQuery(window).ready(function(){loadHideShowRegions(),initLightbox(),initContentFrameTabs(),fadeMessages(),autoFadeSuccess(),loadItemHelp()}),autoFadeSuccess=function(){setTimeout(function(){apex.jQuery("#uSuccessMessage").animate({height:0,opacity:0},1250,function(){apex.jQuery(this).remove()})},4e3)},fadeMessages=function(){apex.jQuery(".uCloseMessage").removeAttr("onclick").click(function(){apex.jQuery(this).parents("section.uMessageRegion").fadeOut()})},loadHideShowRegions=function(){apex.jQuery("a.uRegionControl").click(function(){link=apex.jQuery(this),content=link.parents("div.uRegionHeading").next(),link.toggleClass("uRegionCollapsed"),content.css("display")=="block"?content.slideUp("fast","swing"):content.slideDown("fast","swing")})};var gBackground,gLightbox;initContentFrameTabs=function(){apex.jQuery("div.uFrameRegionSelector > ul li a").click(function(a){a.preventDefault(),link=apex.jQuery(this),subregions=link.parents(".uFrameMain").find("section.uHideShowRegion"),link.parents("ul").find("li a").removeClass("active"),link.hasClass("showAllLink")?(expandAllSections(),link.addClass("active")):(expandSection(link.attr("id").substr(4)),link.addClass("active"))})};