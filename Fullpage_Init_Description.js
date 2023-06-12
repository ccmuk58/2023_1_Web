$(document).ready(function () {
			$('#fullpage').fullpage({
	// 이동
	menu: '#menu', // 메뉴 옵션 ID (해당 메뉴를 사용하여 섹션 간 이동 가능)
	lockAnchors: false, // 앵커 고정 여부
	anchors:['firstPage', 'secondPage'], // 앵커 목록
	navigation: false, // 내장된 네비게이션 활성화 여부
	navigationPosition: 'right', // 내장된 네비게이션 위치 ('left', 'right', 'top', 'bottom')
	navigationTooltips: ['firstSlide', 'secondSlide'], // 내장된 네비게이션 툴팁
	showActiveTooltip: false, // 활성화된 섹션의 툴팁 표시 여부
	slidesNavigation: false, // 슬라이드 네비게이션 활성화 여부
	slidesNavPosition: 'bottom', // 슬라이드 네비게이션 위치 ('top', 'bottom')

	// 스크롤
	css3: true, // CSS3를 사용한 애니메이션 사용 여부
	scrollingSpeed: 700, // 스크롤 속도 (밀리초 단위)
	autoScrolling: true, // 자동 스크롤링 여부
	fitToSection: true, // 섹션에 꽉 차게 표시 여부
	fitToSectionDelay: 600, // 섹션 맞춤 지연 시간 (밀리초 단위)
	scrollBar: false, // 커스텀 스크롤바 사용 여부
	easing: 'easeInOutCubic', // 이징 설정
	easingcss3: 'ease', // CSS3 이징 설정
	loopBottom: false, // 맨 아래 섹션에서 맨 위 섹션으로 순환 여부
	loopTop: false, // 맨 위 섹션에서 맨 아래 섹션으로 순환 여부
	loopHorizontal: true, // 가로 슬라이드에서 순환 여부
	continuousVertical: false, // 세로로 연속 스크롤링 여부
	continuousHorizontal: false, // 가로로 연속 스크롤링 여부
	scrollHorizontally: false, // 가로 스크롤링 가능 여부
	interlockedSlides: false, // 슬라이드 간의 상호 작용 여부
	dragAndMove: false, // 마우스 드래그로 이동 가능 여부
	offsetSections: false, // 섹션 위치 오프셋 사용 여부
	resetSliders: false, // 슬라이더 리셋 여부
	fadingEffect: false, // 페이드 효과 사용 여부
	normalScrollElements: '#element1, .element2', // 일반 스크롤 요소 선택자
	scrollOverflow: true, // 스크롤 오버플로 사용 여부
	scrollOverflowMacStyle: false, // 맥 OS 스타일의 스크롤 오버플로 여부
	scrollOverflowReset: false, // 스크롤 오버플로 리셋 여부
	touchSensitivity: 15, // 터치 감도
	bigSectionsDestination: null, // 큰 섹션으로의 이동 대상

	// 접근성
	keyboardScrolling: true, // 키보드 스크롤링 가능 여부
	animateAnchor: true, // 앵커 이동 시 애니메이션 사용 여부
	recordHistory: true, // 브라우저 기록 저장 여부

	// 디자인
	controlArrows: true, // 컨트롤 화살표 사용 여부
	controlArrowsHTML: ['<div class="fp-arrow"></div>', '<div class="fp-arrow"></div>'], // 컨트롤 화살표 HTML
	verticalCentered: true, // 세로 중앙 정렬 여부
	sectionsColor : ['#ccc', '#fff'], // 섹션 배경색
	paddingTop: '3em', // 섹션 상단 여백
	paddingBottom: '10px', // 섹션 하단 여백
	fixedElements: '#header, .footer', // 고정 요소 선택자
	responsiveWidth: 0, // 반응형 가로 너비
	responsiveHeight: 0, // 반응형 세로 높이
	responsiveSlides: false, // 반응형 슬라이드 여부
	parallax: false, // 패럴랙스 효과 사용 여부
	parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'}, // 패럴랙스 옵션
	dropEffect: false, // 드롭 효과 사용 여부
	dropEffectOptions: { speed: 2300, color: '#F82F4D', zIndex: 9999}, // 드롭 효과 옵션
	waterEffect: false, // 워터 효과 사용 여부
	waterEffectOptions: { animateContent: true, animateOnMouseMove: true}, // 워터 효과 옵션
	cards: false, // 카드 효과 사용 여부
	cardsOptions: {perspective: 100, fadeContent: true, fadeBackground: true}, // 카드 효과 옵션

	// 맞춤 선택자
	sectionSelector: '.section', // 섹션 선택자
	slideSelector: '.slide', // 슬라이드 선택자

	lazyLoading: true, // 지연 로딩 사용 여부
	observer: true, // 섹션 및 슬라이드 변화 감지 여부
	credits: { enabled: true, label: 'Made with fullPage.js', position: 'right'}, // 크레딧 설정

	// 사건(이벤트)
	beforeLeave: function(origin, destination, direction, trigger){}, // 섹션 이동 전 이벤트 핸들러
	onLeave: function(origin, destination, direction, trigger){}, // 섹션 이동 시 이벤트 핸들러
	afterLoad: function(origin, destination, direction, trigger){}, // 섹션 로드 후 이벤트 핸들러
	afterRender: function(){}, // 초기화 완료 후 이벤트 핸들러
	afterResize: function(width, height){}, // 창 크기 조정 후 이벤트 핸들러
	afterReBuild: function(){}, // 다시 빌드 후 이벤트 핸들러
	afterResponsive: function(isResponsive){}, // 반응형 전환 후 이벤트 핸들러
	afterSlideLoad: function(section, origin, destination, direction, trigger){}, // 슬라이드 로드 후 이벤트 핸들러
	onSlideLeave: function(section, origin, destination, direction, trigger){}, // 슬라이드 이동 시 이벤트 핸들러
	onScrollOverflow: function(section, slide, position, direction){} // 스크롤 오버플로 이벤트 핸들러
	});
});