(()=>{"use strict";var e,o={357:()=>{const e=window.React,o=window.wp.blocks,n=window.wp.i18n,t=window.wp.blockEditor,l=window.wp.components,a=window.wp.element,r=window.wp.data,i=()=>(0,e.createElement)(e.Fragment,null,(0,e.createElement)("div",{style:{display:"flex",flexDirection:"column",justifyContent:"center",alignItems:"center",padding:"16px",marginBottom:"10px"}},(0,e.createElement)("p",null,(0,e.createElement)("svg",{width:"41",height:"48",viewBox:"0 0 41 48",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,e.createElement)("path",{d:"M0 34.7721L6.88004 38.677V15.8055L20.4542 7.80977L23.9872 9.4833L30.4953 5.57841L20.4542 -7.62939e-06L0 11.9006V34.7721Z",fill:"#38DAC7"}),(0,e.createElement)("path",{d:"M32.9284 6.87939L34.2126 7.61318L12.3825 19.904L12.1991 40.45L20.6376 45.8616L41.0001 33.6625V35.4969L20.6376 47.6043L10.8232 41.2755V18.9868L32.9284 6.87939Z",fill:"#5566CA"}),(0,e.createElement)("path",{d:"M37.6063 9.53936L36.2305 8.71385L14.217 21.3716V38.9824L20.5459 43.5685L41.0001 31.3694V29.5349L20.5459 41.8258L15.5928 38.2486V22.1054L37.6063 9.53936Z",fill:"#5566CA"}),(0,e.createElement)("path",{d:"M41.0001 11.3738L39.5325 10.5483L17.3356 23.2061V37.2397L20.5459 39.6244L41.0001 27.4253V25.6826L20.5459 37.79L18.9866 36.5976V24.1233L41.0001 11.3738Z",fill:"#5566CA"}))),(0,e.createElement)("h2",{style:{fontSize:"18px",fontFamily:"Inter",marginTop:"-5px",marginBottom:"15px"}},(0,n.__)("Access Without Limits!","cozy-addons")),(0,e.createElement)("p",{style:{textAlign:"center",lineHeight:"20px"}},(0,n.__)("Access more blocks and advanced features for effortless design. Upgrade today for a richer web-building experience!","cozy-addons")),(0,e.createElement)("a",{href:"https://cozythemes.com/pricing-and-plans/",target:"_blank"},(0,e.createElement)("button",{className:"cozy-block-premium-button",style:{backgroundColor:"#5566ca",borderRadius:"20px",padding:"10px",border:"none",color:"#fff",fontFamily:"Inter",fontSize:"10px",fontWeight:"500",cursor:"pointer"}},(0,e.createElement)("div",{style:{display:"flex",gap:"5px",margin:"0"}},(0,e.createElement)("div",null,(0,e.createElement)("svg",{width:"10",height:"10",viewBox:"0 0 10 10",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,e.createElement)("path",{d:"M9.29768 0.0630875L0.24397 5.2847C-0.109583 5.48778 -0.0646564 5.97987 0.286944 6.12828L2.36334 6.99919L7.97527 2.05487C8.0827 1.95919 8.23506 2.10565 8.14325 2.21695L3.43767 7.94822V9.52017C3.43767 9.98102 3.99437 10.1626 4.26784 9.8287L5.50821 8.31924L7.94206 9.33857C8.21943 9.45573 8.53588 9.28194 8.58666 8.98317L9.99306 0.547365C10.0595 0.152913 9.6356 -0.132186 9.29768 0.0630875Z",fill:"white"}))),(0,e.createElement)("div",null,(0,n.__)("Upgrade to Pro","cozy-addons"))))))),c=(0,a.memo)((({clientId:o,attributes:n})=>{const l=(0,r.select)("core/block-editor").getBlockOrder(o).length;return(0,e.createElement)("div",{className:"cozy-sidebar-panel-wrapper"},(0,e.createElement)("div",{className:"relative"},(0,e.createElement)("div",{className:`sidebar-icon-wrapper align-${n.closeIcon.alignment}`},(0,e.createElement)("svg",{className:"sidebar-close-icon",width:"18",height:"18",viewBox:"0 0 18 18",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,e.createElement)("path",{d:"M11.8516 8.59375L16.7378 3.70752C17.3374 3.10791 17.3374 2.13574 16.7378 1.53564L15.6519 0.449707C15.0522 -0.149902 14.0801 -0.149902 13.48 0.449707L8.59375 5.33594L3.70752 0.449707C3.10791 -0.149902 2.13574 -0.149902 1.53564 0.449707L0.449707 1.53564C-0.149902 2.13525 -0.149902 3.10742 0.449707 3.70752L5.33594 8.59375L0.449707 13.48C-0.149902 14.0796 -0.149902 15.0518 0.449707 15.6519L1.53564 16.7378C2.13525 17.3374 3.10791 17.3374 3.70752 16.7378L8.59375 11.8516L13.48 16.7378C14.0796 17.3374 15.0522 17.3374 15.6519 16.7378L16.7378 15.6519C17.3374 15.0522 17.3374 14.0801 16.7378 13.48L11.8516 8.59375Z"})))),(0,e.createElement)(t.InnerBlocks,{renderAppender:l>0?void 0:t.InnerBlocks.ButtonBlockAppender}))})),s=(0,a.memo)((({attributes:o,blockId:n,clientId:t})=>{const l=`\n    #${n} .cozy-sidebar-panel-wrapper{\n      padding: ${o.sidebarPadding.top}px ${o.sidebarPadding.right}px ${o.sidebarPadding.bottom}px ${o.sidebarPadding.left}px;\n      background-color: ${o.bgColor};\n      z-index: ${o.zIndex};\n    }\n    #${n}.layout-custom .cozy-sidebar-panel-wrapper {\n      width: ${o.width}px;\n    }\n    #${n} .sidebar-icon-wrapper svg {\n      width: ${o.iconSize}px;\n      height: ${o.iconSize}px;\n      rotate: ${o.iconRotate}deg;\n      opacity: ${o.iconOpacity};\n    }\n    #${n}.icon-layout-fill .sidebar-icon-wrapper svg {\n      fill: ${o.iconColor};\n    }\n    #${n}.icon-layout-outline .sidebar-icon-wrapper svg {\n      stroke: ${o.iconColor};\n      fill: none;\n    }\n    #${n}.icon-layout-fill .sidebar-icon-wrapper:hover svg, #${n}.icon-layout-fill .open-icon-wrapper:hover .sidebar-icon-wrapper svg {\n      fill: ${o.iconColorHover};\n    }\n    #${n}.icon-layout-outline .sidebar-icon-wrapper:hover svg, #${n}.icon-layout-outline .open-icon-wrapper:hover .sidebar-icon-wrapper svg {\n      stroke: ${o.iconColorHover};\n      fill: none;\n    }\n    #${n}.icon-view-stacked .sidebar-icon-wrapper {\n      padding: ${o.iconBoxStyles.padding.top}px ${o.iconBoxStyles.padding.right}px ${o.iconBoxStyles.padding.bottom}px ${o.iconBoxStyles.padding.left}px;\n      border: ${o.iconBoxStyles.borderWidth}px ${o.iconBoxStyles.borderType} ${o.iconBoxStyles.borderColor};\n      border-radius: ${o.iconBoxStyles.borderRadius}px;\n      background-color: ${o.iconBoxStyles.bgColor};\n    }\n    #${n}.icon-view-stacked .sidebar-icon-wrapper:hover, #${n}.icon-view-stacked .open-icon-wrapper:hover .sidebar-icon-wrapper {\n      background-color: ${o.iconBoxStyles.bgColorHover};\n      border-color: ${o.iconBoxStyles.borderColorHover};\n    }\n    #${n} .relative {\n      padding: ${o.closeIcon.verticalSpacing}px 0;\n      margin: 0 ${o.closeIcon.horizontalSpacing}px;\n    }\n    #${n} .open-icon-wrapper {\n      gap: ${o.openIcon.gap}px;\n      font: ${o.typography.fontWeight} ${o.typography.fontSize}px ${o.typography.fontFamily};\n      color: ${o.typography.color};\n    }\n    #${n} .open-icon-wrapper:hover {\n      color: ${o.typography.colorHover};\n    }\n  `;return(0,e.createElement)(e.Fragment,null,(0,e.createElement)("style",{dangerouslySetInnerHTML:{__html:l}}),(0,e.createElement)("div",{className:`cozy-block-sidebar-panel layout-${o.sidebarLayout} ${o.position} icon-view-${o.iconView} icon-layout-${o.iconLayout}`,id:n},(0,e.createElement)("div",{className:"open-icon-wrapper"},o.openIcon.enableTitle&&"before"===o.openIcon.titlePosition&&(0,e.createElement)("p",null,o.openIcon.title),(0,e.createElement)("div",{className:"sidebar-icon-wrapper"},(0,e.createElement)("svg",{className:"sidebar-open-icon",width:o.iconSize,height:o.iconSize,viewBox:`${o.openIcon.viewBox.vx} ${o.openIcon.viewBox.vy} ${o.openIcon.viewBox.vw} ${o.openIcon.viewBox.vh}`},(0,e.createElement)("path",{d:o.openIcon.path}))),o.openIcon.enableTitle&&"after"===o.openIcon.titlePosition&&(0,e.createElement)("p",null,o.openIcon.title)),(0,e.createElement)(c,{clientId:t,attributes:o})))})),d=JSON.parse('{"u2":"cozy-block/sidebar-panel","TN":"Sidebar Panel"}');(0,o.registerBlockType)(d.u2,{title:(0,n.__)(d.TN,"cozy-addons"),description:(0,n.__)("Maximize versatility with our 'Sidebar Panel' block, seamlessly integrating a customizable sidebar drawer to display menus, latest posts, popular content, or any desired elements for a user-friendly and organized layout.","cozy-addons"),icon:()=>(0,e.createElement)("svg",{width:"26",height:"23",viewBox:"0 0 26 23",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,e.createElement)("rect",{fill:"white",x:"0.5",y:"0.5",width:"16",height:"22",rx:"1.5",stroke:"#5566CA"}),(0,e.createElement)("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M13 5H4V4H13V5Z",fill:"#B2BCF9"}),(0,e.createElement)("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M13 9H4V8H13V9Z",fill:"#B2BCF9"}),(0,e.createElement)("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M13 13H4V12H13V13Z",fill:"#B2BCF9"}),(0,e.createElement)("rect",{x:"18",width:"8",height:"8",rx:"2",fill:"#5566CA"}),(0,e.createElement)("path",{d:"M22.7582 4L23.8953 2.86284C24.0349 2.7233 24.0349 2.49705 23.8953 2.35739L23.6426 2.10466C23.5031 1.96511 23.2768 1.96511 23.1372 2.10466L22 3.24182L20.8628 2.10466C20.7233 1.96511 20.497 1.96511 20.3574 2.10466L20.1047 2.35739C19.9651 2.49693 19.9651 2.72318 20.1047 2.86284L21.2418 4L20.1047 5.13716C19.9651 5.2767 19.9651 5.50295 20.1047 5.64261L20.3574 5.89534C20.4969 6.03489 20.7233 6.03489 20.8628 5.89534L22 4.75818L23.1372 5.89534C23.2767 6.03489 23.5031 6.03489 23.6426 5.89534L23.8953 5.64261C24.0349 5.50307 24.0349 5.27682 23.8953 5.13716L22.7582 4Z",fill:"white"})),edit:function({attributes:o,setAttributes:r,clientId:c}){o.blockClientId=c;const d=(0,t.useBlockProps)({className:"cozy-block-wrapper"}),p=`cozyBlock_${c.replace(/-/gi,"_")}`,[y,g]=(0,a.useState)(""),b=Object.keys(cozyIcons.collection).filter((e=>e.toLowerCase().includes(y.toLowerCase()))),[m,h]=(0,a.useState)(!0),u=(e,n)=>{let t={...o.iconBoxStyles.padding};t={...t,top:Math.abs(n),right:Math.abs(n),bottom:Math.abs(n),left:Math.abs(n)},r(m?{...o,iconBoxStyles:{...o.iconBoxStyles,padding:t}}:{...o,iconBoxStyles:{...o.iconBoxStyles,padding:{...o.iconBoxStyles.padding,[e]:Math.abs(n)}}})},[v,C]=(0,a.useState)(!0),_=(e,n)=>{let t={...o.sidebarPadding};t={...t,top:Math.abs(n),right:Math.abs(n),bottom:Math.abs(n),left:Math.abs(n)},r(v?{...o,sidebarPadding:t}:{...o,sidebarPadding:{...o.sidebarPadding,[e]:Math.abs(n)}})};return(0,e.createElement)(e.Fragment,null,(0,e.createElement)("div",{...d},(0,e.createElement)(s,{attributes:o,blockId:p,clientId:c})),(0,e.createElement)(t.InspectorControls,{key:"setting",group:"settings"},(0,e.createElement)(l.PanelBody,{title:(0,n.__)("Sidebar Panel","cozy-addons")},(0,e.createElement)(l.SelectControl,{label:(0,n.__)("Layout","cozy-addons"),options:[{label:(0,n.__)("Full Width","cozy-addons"),value:"full"},{label:(0,n.__)("Custom","cozy-addons"),value:"custom"}],value:o.sidebarLayout,onChange:e=>r({...o,sidebarLayout:e})}),"custom"===o.sidebarLayout&&(0,e.createElement)(l.RangeControl,{label:(0,n.__)("Width","cozy-addons"),min:100,max:1e3,step:1,value:o.width,onChange:e=>r({...o,width:Math.abs(e)})}),(0,e.createElement)(l.SelectControl,{label:(0,n.__)("Position","cozy-addons"),options:[{label:(0,n.__)("Left","cozy-addons"),value:"left"},{label:(0,n.__)("Right","cozy-addons"),value:"right"}],value:o.position,onChange:e=>r({...o,position:e})}),(0,e.createElement)(l.TextControl,{label:(0,n.__)("Z Index","cozy-addons"),type:"number",min:0,step:1,value:o.zIndex,onChange:e=>r({...o,zIndex:Math.abs(e)})})),(0,e.createElement)(l.PanelBody,{title:(0,n.__)("Open Icon","cozy-addons")},(0,e.createElement)(l.BaseControl,null,(0,e.createElement)(l.BaseControl.VisualLabel,null,(0,n.__)("Select Icon","cozy-addons")),(0,e.createElement)("input",{type:"text",className:"cozy-icon-search",placeholder:(0,n.__)("Search Icons...","cozy-addons"),value:y,onChange:e=>{g(e.target.value)}}),(0,e.createElement)("div",{className:"cozy-icon-list"},b.map((n=>{const t=cozyIcons.collection[n],a=t.match(/d="([^"]+)"/),i=t.match(/viewBox\s*=\s*"([^"]*)"/),c=a?a[1]:"",s=i?i[1]:"";return(0,e.createElement)(l.Button,{key:n,onClick:()=>((e,n)=>{const t=n.split(" ");r({...o,openIcon:{...o.openIcon,path:e,viewBox:{vx:t[0],vy:t[1],vw:t[2],vh:t[3]}}})})(c,s)},(0,e.createElement)("div",{className:"cozy-icon",title:n,dangerouslySetInnerHTML:{__html:t}}))})))),(0,e.createElement)(l.ToggleControl,{label:(0,n.__)("Enable Title"),checked:o.openIcon.enableTitle,onChange:e=>r({...o,openIcon:{...o.openIcon,enableTitle:e}})}),o.openIcon.enableTitle&&(0,e.createElement)(e.Fragment,null,(0,e.createElement)(l.SelectControl,{label:(0,n.__)("Title Position","cozy-addons"),options:[{label:(0,n.__)("Before Icon","cozy-addons"),value:"before"},{label:(0,n.__)("After Icon","cozy-addons"),value:"after"}],value:o.openIcon.titlePosition,onChange:e=>r({...o,openIcon:{...o.openIcon,titlePosition:e}})}),(0,e.createElement)(l.TextControl,{label:(0,n.__)("Title","cozy-addons"),type:"text",value:o.openIcon.title,onChange:e=>r({...o,openIcon:{...o.openIcon,title:e}})}),(0,e.createElement)(l.RangeControl,{label:(0,n.__)("Gap","cozy-addons"),min:0,max:30,step:1,value:o.openIcon.gap,onChange:e=>r({...o,openIcon:{...o.openIcon,gap:Math.abs(e)}})}))),(0,e.createElement)(l.PanelBody,{title:(0,n.__)("Close Icon","cozy-addons"),initialOpen:!1},(0,e.createElement)(l.SelectControl,{label:(0,n.__)("Alignment","cozy-addons"),options:[{label:(0,n.__)("Left","cozy-addons"),value:"left"},{label:(0,n.__)("Right","cozy-addons"),value:"right"}],value:o.closeIcon.alignment,onChange:e=>r({...o,closeIcon:{...o.closeIcon,alignment:e}})}),(0,e.createElement)(l.RangeControl,{label:(0,n.__)("Vertical Spacing","cozy-addons"),min:0,max:50,step:1,value:o.closeIcon.verticalSpacing,onChange:e=>r({...o,closeIcon:{...o.closeIcon,verticalSpacing:Math.abs(e)}})}),(0,e.createElement)(l.RangeControl,{label:(0,n.__)("Horizontal Spacing","cozy-addons"),min:0,max:50,step:1,value:o.closeIcon.horizontalSpacing,onChange:e=>r({...o,closeIcon:{...o.closeIcon,horizontalSpacing:Math.abs(e)}})})),!cozyBlockAssets.isPremium&&(0,e.createElement)(i,null)),(0,e.createElement)(t.InspectorControls,{key:"style",group:"styles"},(0,e.createElement)(l.PanelBody,{title:(0,n.__)("Sidebar Panel Styles")},(0,e.createElement)(l.BaseControl,null,(0,e.createElement)(l.BaseControl.VisualLabel,null,(0,n.__)("Padding","cozy-addons")),(0,e.createElement)("div",{style:{display:"flex",gap:"5px",height:"50px",position:"relative"}},(0,e.createElement)("button",{className:"cozy-link-styles "+(v?"":"cozy-attr-link-disabled"),onClick:()=>C(!v)},(0,e.createElement)("svg",{width:"10",height:"16",viewBox:"0 0 15 28",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,e.createElement)("path",{d:"M6.18931 9.59516L6.18931 19.3466H8.70581V9.59516H6.18931Z",fill:"black"}),(0,e.createElement)("path",{d:"M0.0553284 7.88029L0.0553284 13.2126H2.53381L2.53381 7.88029C2.82201 4.53678 5.6079 3.53757 6.94321 3.4415C10.9203 3.15534 12.1019 6.00678 12.3901 7.88029V13.2126L14.8398 13.2126V7.88029C14.1251 1.90809 9.2776 0.780139 6.94321 0.962687C1.84791 1.30857 0.0553284 5.92031 0.0553284 7.88029Z",fill:"black"}),(0,e.createElement)("path",{d:"M0.0553284 20.9042L0.0553284 15.5718H2.53381L2.53381 20.9042C2.82201 24.2477 5.6079 25.2469 6.94321 25.343C10.9203 25.6291 12.1019 22.7777 12.3901 20.9042V15.5718L14.8398 15.5718V20.9042C14.1251 26.8764 9.2776 28.0043 6.94321 27.8218C1.84791 27.4759 0.0553284 22.8641 0.0553284 20.9042Z",fill:"black"}))),(0,e.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,n.__)("Top","cozy-addons"),value:o.sidebarPadding.top,onChange:e=>_("top",e)}),(0,e.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,n.__)("Right","cozy-addons"),value:o.sidebarPadding.right,onChange:e=>_("right",e)}),(0,e.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,n.__)("Bottom","cozy-addons"),value:o.sidebarPadding.bottom,onChange:e=>_("bottom",e)}),(0,e.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,n.__)("Left","cozy-addons"),value:o.sidebarPadding.left,onChange:e=>_("left",e)}))),(0,e.createElement)(t.PanelColorSettings,{className:"cozy-color-control",title:(0,n.__)("Background Color","cozy-addons"),colorSettings:[{label:(0,n.__)("Normal","cozy-addons"),value:o.bgColor,onChange:e=>r({...o,bgColor:e})}]}),(0,e.createElement)(t.PanelColorSettings,{className:"cozy-color-control",title:(0,n.__)("Overlay Background Color","cozy-addons"),colorSettings:[{label:(0,n.__)("Normal","cozy-addons"),value:o.overlayBgColor,onChange:e=>r({...o,overlayBgColor:e})}]})),"stacked"===o.iconView&&(0,e.createElement)(l.PanelBody,{title:(0,n.__)("Icon Box Styles","cozy-addons"),initialOpen:!1},(0,e.createElement)(l.BaseControl,null,(0,e.createElement)(l.BaseControl.VisualLabel,null,(0,n.__)("Padding","cozy-addons")),(0,e.createElement)("div",{style:{display:"flex",gap:"5px",height:"50px",position:"relative"}},(0,e.createElement)("button",{className:"cozy-link-styles "+(m?"":"cozy-attr-link-disabled"),onClick:()=>h(!m)},(0,e.createElement)("svg",{width:"10",height:"16",viewBox:"0 0 15 28",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,e.createElement)("path",{d:"M6.18931 9.59516L6.18931 19.3466H8.70581V9.59516H6.18931Z",fill:"black"}),(0,e.createElement)("path",{d:"M0.0553284 7.88029L0.0553284 13.2126H2.53381L2.53381 7.88029C2.82201 4.53678 5.6079 3.53757 6.94321 3.4415C10.9203 3.15534 12.1019 6.00678 12.3901 7.88029V13.2126L14.8398 13.2126V7.88029C14.1251 1.90809 9.2776 0.780139 6.94321 0.962687C1.84791 1.30857 0.0553284 5.92031 0.0553284 7.88029Z",fill:"black"}),(0,e.createElement)("path",{d:"M0.0553284 20.9042L0.0553284 15.5718H2.53381L2.53381 20.9042C2.82201 24.2477 5.6079 25.2469 6.94321 25.343C10.9203 25.6291 12.1019 22.7777 12.3901 20.9042V15.5718L14.8398 15.5718V20.9042C14.1251 26.8764 9.2776 28.0043 6.94321 27.8218C1.84791 27.4759 0.0553284 22.8641 0.0553284 20.9042Z",fill:"black"}))),(0,e.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,n.__)("Top","cozy-addons"),value:o.iconBoxStyles.padding.top,onChange:e=>u("top",e)}),(0,e.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,n.__)("Right","cozy-addons"),value:o.iconBoxStyles.padding.right,onChange:e=>u("right",e)}),(0,e.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,n.__)("Bottom","cozy-addons"),value:o.iconBoxStyles.padding.bottom,onChange:e=>u("bottom",e)}),(0,e.createElement)(l.TextControl,{type:"number",step:1,min:0,label:(0,n.__)("Left","cozy-addons"),value:o.iconBoxStyles.padding.left,onChange:e=>u("left",e)}))),(0,e.createElement)(l.SelectControl,{label:(0,n.__)("Border Type","cozy-addons"),value:o.iconBoxStyles.borderType,options:[{label:(0,n.__)("None","cozy-addons"),value:"none"},{label:(0,n.__)("Solid","cozy-addons"),value:"solid"},{label:(0,n.__)("Double","cozy-addons"),value:"double"},{label:(0,n.__)("Dotted","cozy-addons"),value:"dotted"},{label:(0,n.__)("Dashed","cozy-addons"),value:"dashed"},{label:(0,n.__)("Groove","cozy-addons"),value:"groove"}],onChange:e=>r({...o,iconBoxStyles:{...o.iconBoxStyles,borderType:e}})}),"none"!==o.iconBoxStyles.borderType&&(0,e.createElement)(e.Fragment,null,(0,e.createElement)(l.RangeControl,{label:(0,n.__)("Border Width","cozy-addons"),min:1,max:50,step:1,value:o.iconBoxStyles.borderWidth,onChange:e=>r({...o,iconBoxStyles:{...o.iconBoxStyles,borderWidth:Math.abs(e)}})}),(0,e.createElement)(t.PanelColorSettings,{className:"cozy-color-control",title:(0,n.__)("Border Color","cozy-addons"),colorSettings:[{label:(0,n.__)("Normal","cozy-addons"),value:o.iconBoxStyles.borderColor,onChange:e=>r({...o,iconBoxStyles:{...o.iconBoxStyles,borderColor:e}})},{label:(0,n.__)("Hover","cozy-addons"),value:o.iconBoxStyles.borderColorHover,onChange:e=>r({...o,iconBoxStyles:{...o.iconBoxStyles,borderColorHover:e}})}]})),(0,e.createElement)(l.RangeControl,{label:(0,n.__)("Border Radius","cozy-addons"),min:1,max:100,step:1,value:o.iconBoxStyles.borderRadius,onChange:e=>r({...o,iconBoxStyles:{...o.iconBoxStyles,borderRadius:Math.abs(e)}})}),(0,e.createElement)(t.PanelColorSettings,{className:"cozy-color-control",title:(0,n.__)("Background Color","cozy-addons"),colorSettings:[{label:(0,n.__)("Normal","cozy-addons"),value:o.iconBoxStyles.bgColor,onChange:e=>r({...o,iconBoxStyles:{...o.iconBoxStyles,bgColor:e}})},{label:(0,n.__)("Hover","cozy-addons"),value:o.iconBoxStyles.bgColorHover,onChange:e=>r({...o,iconBoxStyles:{...o.iconBoxStyles,bgColorHover:e}})}]})),(0,e.createElement)(l.PanelBody,{title:(0,n.__)("Icon Styles","cozy-addons"),initialOpen:!1},(0,e.createElement)(l.SelectControl,{label:(0,n.__)("Icon View","cozy-addons"),options:[{label:(0,n.__)("Default","cozy-addons"),value:"default"},{label:(0,n.__)("Stacked","cozy-addons"),value:"stacked"}],value:o.iconView,onChange:e=>r({...o,iconView:e})}),(0,e.createElement)(l.SelectControl,{label:(0,n.__)("Icon Layout","cozy-addons"),options:[{label:(0,n.__)("Fill","cozy-addons"),value:"fill"},{label:(0,n.__)("Outline","cozy-addons"),value:"outline"}],value:o.iconLayout,onChange:e=>r({...o,iconLayout:e})}),(0,e.createElement)(l.TextControl,{label:(0,n.__)("Size","cozy-addons"),type:"number",value:o.iconSize,onChange:e=>r({...o,iconSize:Math.abs(e)})}),(0,e.createElement)(l.RangeControl,{label:(0,n.__)("Opacity","cozy-addons"),min:0,max:1,step:.1,value:o.iconOpacity,onChange:e=>r({...o,iconOpacity:Math.abs(e)})}),(0,e.createElement)(l.RangeControl,{label:(0,n.__)("Icon Rotate","cozy-addons"),min:0,max:360,step:90,value:o.iconRotate,onChange:e=>r({...o,iconRotate:Math.abs(e)})}),(0,e.createElement)(t.PanelColorSettings,{className:"cozy-color-control",title:(0,n.__)("Color","cozy-addons"),colorSettings:[{label:(0,n.__)("Normal","cozy-addons"),value:o.iconColor,onChange:e=>r({...o,iconColor:e})},{label:(0,n.__)("Hover","cozy-addons"),value:o.iconColorHover,onChange:e=>r({...o,iconColorHover:e})}]})),o.openIcon.enableTitle&&(0,e.createElement)(l.PanelBody,{title:(0,n.__)("Typography","cozy-addons"),initialOpen:!1},(0,e.createElement)(l.SelectControl,{label:(0,n.__)("Font","cozy-addons"),options:cozyBlockAssets.fonts,value:o.typography.fontFamily,onChange:e=>r({...o,typography:{...o.typography,fontFamily:e}})}),(0,e.createElement)(l.TextControl,{label:(0,n.__)("Font Size","cozy-addons"),type:"number",min:10,value:o.typography.fontSize,onChange:e=>r({...o,typography:{...o.typography,fontSize:Math.abs(e)}})}),(0,e.createElement)(l.SelectControl,{label:(0,n.__)("Font Weight","cozy-addons"),options:[{label:(0,n.__)("Thin","cozy-addons"),value:100},{label:(0,n.__)("Extra Light","cozy-addons"),value:200},{label:(0,n.__)("Light","cozy-addons"),value:300},{label:(0,n.__)("Normal","cozy-addons"),value:400},{label:(0,n.__)("Medium","cozy-addons"),value:500},{label:(0,n.__)("Semi Bold","cozy-addons"),value:600},{label:(0,n.__)("Bold","cozy-addons"),value:700},{label:(0,n.__)("Extra Bold","cozy-addons"),value:800}],value:o.typography.fontWeight,onChange:e=>r({...o,typography:{...o.typography,fontWeight:e}})}),(0,e.createElement)(t.PanelColorSettings,{className:"cozy-color-control",title:(0,n.__)("Color","cozy-addons"),colorSettings:[{label:(0,n.__)("Normal","cozy-addons"),value:o.typography.color,onChange:e=>r({...o,typography:{...o.typography,color:e}})},{label:(0,n.__)("Hover","cozy-addons"),value:o.typography.colorHover,onChange:e=>r({...o,typography:{...o.typography,colorHover:e}})}]}))))},save:function({attributes:o}){const n=`cozyBlock_${o.blockClientId.replace(/-/gi,"_")}`,l=`\n    #${n} .cozy-sidebar-panel-wrapper{\n      padding: ${o.sidebarPadding.top}px ${o.sidebarPadding.right}px ${o.sidebarPadding.bottom}px ${o.sidebarPadding.left}px;\n      background-color: ${o.bgColor};\n      z-index: ${o.zIndex};\n    }\n    #${n}.layout-custom .cozy-sidebar-panel-wrapper {\n      width: ${o.width}px;\n    }\n    #${n} .sidebar-icon-wrapper svg {\n      width: ${o.iconSize}px;\n      height: ${o.iconSize}px;\n      rotate: ${o.iconRotate}deg;\n      opacity: ${o.iconOpacity};\n    }\n    #${n}.icon-layout-fill .sidebar-icon-wrapper svg {\n      fill: ${o.iconColor};\n    }\n    #${n}.icon-layout-outline .sidebar-icon-wrapper svg {\n      stroke: ${o.iconColor};\n      fill: none;\n    }\n    #${n}.icon-layout-fill .sidebar-icon-wrapper:hover svg, #${n}.icon-layout-fill .open-icon-wrapper:hover .sidebar-icon-wrapper svg {\n      fill: ${o.iconColorHover};\n    }\n    #${n}.icon-layout-outline .sidebar-icon-wrapper:hover svg, #${n}.icon-layout-outline .open-icon-wrapper:hover .sidebar-icon-wrapper svg {\n      stroke: ${o.iconColorHover};\n      fill: none;\n    }\n    #${n}.icon-view-stacked .sidebar-icon-wrapper {\n      padding: ${o.iconBoxStyles.padding.top}px ${o.iconBoxStyles.padding.right}px ${o.iconBoxStyles.padding.bottom}px ${o.iconBoxStyles.padding.left}px;\n      border: ${o.iconBoxStyles.borderWidth}px ${o.iconBoxStyles.borderType} ${o.iconBoxStyles.borderColor};\n      border-radius: ${o.iconBoxStyles.borderRadius}px;\n      background-color: ${o.iconBoxStyles.bgColor};\n    }\n    #${n}.icon-view-stacked .sidebar-icon-wrapper:hover, #${n}.icon-view-stacked .open-icon-wrapper:hover .sidebar-icon-wrapper {\n      background-color: ${o.iconBoxStyles.bgColorHover};\n      border-color: ${o.iconBoxStyles.borderColorHover};\n    }\n    #${n} .relative {\n      padding: ${o.closeIcon.verticalSpacing}px 0;\n      margin: 0 ${o.closeIcon.horizontalSpacing}px;\n    }\n    #${n} .open-icon-wrapper {\n      gap: ${o.openIcon.gap}px;\n      font: ${o.typography.fontWeight} ${o.typography.fontSize}px ${o.typography.fontFamily};\n      color: ${o.typography.color};\n    }\n    #${n} .open-icon-wrapper:hover {\n      color: ${o.typography.colorHover};\n    }\n  `;return(0,e.createElement)(e.Fragment,null,(0,e.createElement)("style",{dangerouslySetInnerHTML:{__html:l}}),(0,e.createElement)("div",{className:`cozy-block-sidebar-panel layout-${o.sidebarLayout} ${o.position} icon-view-${o.iconView} icon-layout-${o.iconLayout}`,id:n},(0,e.createElement)("div",{className:"open-icon-wrapper"},o.openIcon.enableTitle&&"before"===o.openIcon.titlePosition&&(0,e.createElement)("p",null,o.openIcon.title),(0,e.createElement)("div",{className:"sidebar-icon-wrapper"},(0,e.createElement)("svg",{className:"sidebar-open-icon",width:o.iconSize,height:o.iconSize,viewBox:`${o.openIcon.viewBox.vx} ${o.openIcon.viewBox.vy} ${o.openIcon.viewBox.vw} ${o.openIcon.viewBox.vh}`},(0,e.createElement)("path",{d:o.openIcon.path}))),o.openIcon.enableTitle&&"after"===o.openIcon.titlePosition&&(0,e.createElement)("p",null,o.openIcon.title)),(0,e.createElement)("div",{className:"cozy-sidebar-panel-wrapper"},(0,e.createElement)("div",{className:"relative"},(0,e.createElement)("div",{className:`sidebar-icon-wrapper close-icon-wrapper align-${o.closeIcon.alignment}`},(0,e.createElement)("svg",{className:"sidebar-close-icon",width:"18",height:"18",viewBox:"0 0 18 18",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,e.createElement)("path",{d:"M11.8516 8.59375L16.7378 3.70752C17.3374 3.10791 17.3374 2.13574 16.7378 1.53564L15.6519 0.449707C15.0522 -0.149902 14.0801 -0.149902 13.48 0.449707L8.59375 5.33594L3.70752 0.449707C3.10791 -0.149902 2.13574 -0.149902 1.53564 0.449707L0.449707 1.53564C-0.149902 2.13525 -0.149902 3.10742 0.449707 3.70752L5.33594 8.59375L0.449707 13.48C-0.149902 14.0796 -0.149902 15.0518 0.449707 15.6519L1.53564 16.7378C2.13525 17.3374 3.10791 17.3374 3.70752 16.7378L8.59375 11.8516L13.48 16.7378C14.0796 17.3374 15.0522 17.3374 15.6519 16.7378L16.7378 15.6519C17.3374 15.0522 17.3374 14.0801 16.7378 13.48L11.8516 8.59375Z"})))),(0,e.createElement)(t.InnerBlocks.Content,null))))}})}},n={};function t(e){var l=n[e];if(void 0!==l)return l.exports;var a=n[e]={exports:{}};return o[e](a,a.exports,t),a.exports}t.m=o,e=[],t.O=(o,n,l,a)=>{if(!n){var r=1/0;for(d=0;d<e.length;d++){for(var[n,l,a]=e[d],i=!0,c=0;c<n.length;c++)(!1&a||r>=a)&&Object.keys(t.O).every((e=>t.O[e](n[c])))?n.splice(c--,1):(i=!1,a<r&&(r=a));if(i){e.splice(d--,1);var s=l();void 0!==s&&(o=s)}}return o}a=a||0;for(var d=e.length;d>0&&e[d-1][2]>a;d--)e[d]=e[d-1];e[d]=[n,l,a]},t.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={826:0,431:0};t.O.j=o=>0===e[o];var o=(o,n)=>{var l,a,[r,i,c]=n,s=0;if(r.some((o=>0!==e[o]))){for(l in i)t.o(i,l)&&(t.m[l]=i[l]);if(c)var d=c(t)}for(o&&o(n);s<r.length;s++)a=r[s],t.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return t.O(d)},n=globalThis.webpackChunksidebar_panel=globalThis.webpackChunksidebar_panel||[];n.forEach(o.bind(null,0)),n.push=o.bind(null,n.push.bind(n))})();var l=t.O(void 0,[431],(()=>t(357)));l=t.O(l)})();