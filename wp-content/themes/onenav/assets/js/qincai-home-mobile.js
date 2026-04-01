(function(){
  if (typeof window === 'undefined' || window.innerWidth > 991) return;

  var shortNameMap = {
    'Claw小龙虾': '小龙虾',
    'AI云端部署': '云端部署',
    'AI聊天助手': '聊天助手',
    'AI绘图工具': '绘图工具',
    'AI写作工具': '写作工具',
    'AI视频工具': '视频工具',
    'AI办公工具': '办公工具',
    'AI设计工具': '设计工具',
    'AI编程工具': '编程工具',
    'AI大模型': 'AI大模型',
    'AISkills市场': 'Skills市场',
    'Agent生态': 'Agent生态',
    'Agent支付': 'Agent支付',
    'AIMaas平台': 'MaaS平台',
    'AI音频工具': '音频工具',
    'AI搜索引擎': '搜索引擎',
    'AI开发平台': '开发平台',
    'AI学习网站': '学习网站',
    'AI内容检测': '内容检测',
    'AI提示词': 'AI提示词',
    'Coding Plan': '编码计划'
  };

  var groupMap = {
    'AI聊天助手': 'ai-tools',
    'AI绘图工具': 'ai-tools',
    'AI写作工具': 'ai-tools',
    'AI视频工具': 'ai-tools',
    'AI办公工具': 'ai-tools',
    'AI设计工具': 'ai-tools',
    'AI编程工具': 'ai-tools',
    'AI音频工具': 'ai-tools',
    'AI搜索引擎': 'ai-tools',
    'AI大模型': 'ai-platform',
    'AI开发平台': 'ai-platform',
    'AI云端部署': 'ai-platform',
    'AIMaas平台': 'ai-platform',
    'Claw小龙虾': 'claw-eco',
    'AISkills市场': 'claw-eco',
    'Agent生态': 'claw-eco',
    'Agent支付': 'claw-eco',
    'Coding Plan': 'claw-eco',
    'AI学习网站': 'study',
    'AI提示词': 'study',
    'AI内容检测': 'study'
  };

  var aside = document.querySelector('.qincai-left-sidebar');
  if (!aside) return;

  var asideLinks = Array.prototype.slice.call(document.querySelectorAll('.qincai-left-sidebar .aside-item > a[href^="#"], .qincai-left-sidebar .aside-btn[href^="#"]'));
  if (!asideLinks.length) return;

  asideLinks.forEach(function(link){
    var textNode = link.querySelector('span') || link;
    var fullText = (textNode.textContent || '').trim().replace(/\s+/g, ' ');
    var shortText = shortNameMap[fullText];
    if (shortText) {
      link.setAttribute('data-full-name', fullText);
      link.setAttribute('data-group', groupMap[fullText] || '');
      textNode.textContent = shortText;
      textNode.classList.add('qincai-aside-text');
    }
  });

  var primaryTabs = Array.prototype.slice.call(document.querySelectorAll('[data-qincai-primary-tabs] .qincai-primary-tab'));
  function setPrimaryActive(group){
    primaryTabs.forEach(function(tab){
      tab.classList.toggle('is-active', tab.getAttribute('data-group') === group);
    });
  }

  if (primaryTabs.length) {
    primaryTabs.forEach(function(tab){
      tab.addEventListener('click', function(){
        var group = tab.getAttribute('data-group');
        var targetLink = asideLinks.find(function(link){ return link.getAttribute('data-group') === group; });
        if (targetLink) {
          targetLink.click();
          var href = targetLink.getAttribute('href');
          var target = href ? document.querySelector(href) : null;
          if (target) {
            var top = target.getBoundingClientRect().top + window.scrollY - 210;
            window.scrollTo({ top: top, behavior: 'smooth' });
          }
        }
        setPrimaryActive(group);
      }, { passive: true });
    });
  }

  var targets = asideLinks.map(function(link){
    var href = link.getAttribute('href');
    var target = href ? document.querySelector(href) : null;
    return target ? { link: link, target: target } : null;
  }).filter(Boolean);

  if (!targets.length) return;

  function centerActiveLink(activeLink){
    if (!activeLink) return;
    var scrollParent = aside.querySelector('.aside-ul') || aside;
    var parentRect = scrollParent.getBoundingClientRect();
    var linkRect = activeLink.getBoundingClientRect();
    var delta = (linkRect.top - parentRect.top) - (parentRect.height / 2) + (linkRect.height / 2);
    scrollParent.scrollTo({ top: scrollParent.scrollTop + delta, behavior: 'smooth' });
  }

  function setActive(activeLink, shouldCenter){
    asideLinks.forEach(function(link){ link.classList.remove('active'); });
    if (activeLink) {
      activeLink.classList.add('active');
      if (shouldCenter) centerActiveLink(activeLink);
      var group = activeLink.getAttribute('data-group');
      if (group) setPrimaryActive(group);
    }
  }

  asideLinks.forEach(function(link){
    link.addEventListener('click', function(){
      setActive(link, true);
    }, { passive: true });
  });

  function syncActive(){
    var fromTop = window.scrollY + 240;
    var current = targets[0];
    targets.forEach(function(item){
      if (item.target.offsetTop <= fromTop) current = item;
    });
    if (current) setActive(current.link, false);
  }

  syncActive();
  var initial = document.querySelector('.qincai-left-sidebar .active') || asideLinks[0];
  if (initial) {
    centerActiveLink(initial);
    var initialGroup = initial.getAttribute('data-group');
    if (initialGroup) setPrimaryActive(initialGroup);
  }
  window.addEventListener('scroll', syncActive, { passive: true });
})();
