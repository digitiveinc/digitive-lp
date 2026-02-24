<?php
/*
Template Name: LP Kachitto Standalone
*/
if (!defined('ABSPATH')) { exit; }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>カチット | 社内ナレッジをAIで資産に変える - 株式会社digitive</title>
  <meta name="description" content="カチットは、社内の情報・マニュアル・動画・属人的ナレッジをAIチャットボットに集約。LINEで誰でも簡単に社内情報へアクセス。導入から定着まで伴走します。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700;900&family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
    html { scroll-behavior: smooth; font-size: 16px; }
    body { font-family: 'Noto Sans JP', 'Inter', sans-serif; color: #1a1a2e; background: #fff; line-height: 1.8; overflow-x: hidden; }
    img { max-width: 100%; height: auto; display: block; }
    a { text-decoration: none; color: inherit; }
    ul { list-style: none; }

    :root {
      --primary: #0f4c81; --primary-dark: #0a3560; --primary-light: #e8f4fd;
      --accent: #ff6b35; --accent-hover: #e55a2b; --accent-light: #fff3ed;
      --dark: #1a1a2e; --gray-900: #2d2d3f; --gray-700: #4a4a5e;
      --gray-500: #7a7a8e; --gray-300: #c4c4d0; --gray-100: #f4f6f9;
      --white: #ffffff;
      --gradient-primary: linear-gradient(135deg, #0f4c81 0%, #1a6fb5 100%);
      --gradient-accent: linear-gradient(135deg, #ff6b35 0%, #ff8c5a 100%);
      --shadow-sm: 0 2px 8px rgba(0,0,0,0.06); --shadow-md: 0 4px 20px rgba(0,0,0,0.08);
      --shadow-lg: 0 8px 40px rgba(0,0,0,0.12); --shadow-xl: 0 16px 60px rgba(0,0,0,0.16);
      --radius: 12px; --radius-lg: 20px;
    }

    .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .section-label { display: inline-block; font-family: 'Inter', sans-serif; font-size: 0.75rem; font-weight: 700; letter-spacing: 0.2em; text-transform: uppercase; color: var(--accent); margin-bottom: 12px; }
    .section-title { font-size: 2.2rem; font-weight: 900; line-height: 1.3; margin-bottom: 20px; }
    .section-subtitle { font-size: 1.05rem; color: var(--gray-500); max-width: 640px; margin: 0 auto 60px; }
    .text-center { text-align: center; }

    .btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 16px 36px; border-radius: 60px; font-size: 1rem; font-weight: 700; border: none; cursor: pointer; transition: all 0.3s ease; white-space: nowrap; }
    .btn-accent { background: var(--gradient-accent); color: var(--white); box-shadow: 0 4px 20px rgba(255, 107, 53, 0.35); }
    .btn-accent:hover { transform: translateY(-2px); box-shadow: 0 6px 30px rgba(255, 107, 53, 0.5); }
    .btn-outline { background: transparent; color: var(--primary); border: 2px solid var(--primary); }
    .btn-outline:hover { background: var(--primary); color: white; }
    .btn-primary { background: var(--gradient-primary); color: var(--white); box-shadow: 0 4px 20px rgba(15, 76, 129, 0.35); }
    .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 30px rgba(15, 76, 129, 0.5); }
    .btn-white { background: var(--white); color: var(--primary); box-shadow: var(--shadow-md); }
    .btn-white:hover { transform: translateY(-2px); box-shadow: var(--shadow-lg); }
    .btn-group { display: flex; gap: 16px; flex-wrap: wrap; }

    /* HEADER */
    .header { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background: rgba(255,255,255,0.97); backdrop-filter: blur(20px); border-bottom: 1px solid rgba(0,0,0,0.06); transition: all 0.3s ease; }
    .header-inner { display: flex; align-items: center; justify-content: space-between; height: 72px; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
    .logo { display: flex; align-items: center; gap: 10px; }
    .logo img { height: 22px; }
    .logo-divider { width: 1px; height: 20px; background: var(--gray-300); margin: 0 4px; }
    .logo-product { font-size: 1.1rem; font-weight: 900; color: var(--primary); }
    .header-nav { display: flex; align-items: center; gap: 32px; }
    .header-nav a { font-size: 0.85rem; font-weight: 500; color: var(--gray-700); transition: color 0.3s; }
    .header-nav a:hover { color: var(--primary); }
    .header-cta .btn { padding: 10px 24px; font-size: 0.85rem; }
    .mobile-menu-btn { display: none; background: none; border: none; cursor: pointer; width: 32px; height: 32px; flex-direction: column; justify-content: center; align-items: center; gap: 5px; }
    .mobile-menu-btn span { display: block; width: 24px; height: 2px; background: var(--dark); transition: all 0.3s; }

    /* HERO - CLEAN WHITE */
    .hero { position: relative; min-height: 100vh; display: flex; align-items: center; background: linear-gradient(180deg, #ffffff 0%, #f4f6f9 100%); overflow: hidden; padding-top: 72px; }
    .hero::before { content: ''; position: absolute; top: -20%; right: -15%; width: 60%; height: 140%; background: radial-gradient(ellipse, rgba(15,76,129,0.06) 0%, transparent 70%); pointer-events: none; }
    .hero-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; position: relative; z-index: 2; }
    .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: var(--primary-light); border: 1px solid rgba(15,76,129,0.15); border-radius: 60px; padding: 6px 16px; font-size: 0.8rem; font-weight: 600; color: var(--primary); margin-bottom: 24px; }
    .hero-badge::before { content: ''; width: 8px; height: 8px; background: var(--primary); border-radius: 50%; animation: pulse 2s infinite; }
    @keyframes pulse { 0%, 100% { opacity: 1; transform: scale(1); } 50% { opacity: 0.5; transform: scale(1.5); } }
    .hero-title { font-size: 2.8rem; font-weight: 900; line-height: 1.3; color: var(--dark); margin-bottom: 24px; }
    .hero-title .highlight { color: var(--primary); }
    .hero-description { font-size: 1.05rem; color: var(--gray-500); margin-bottom: 40px; line-height: 1.9; }
    .hero-stats { display: flex; gap: 40px; margin-top: 48px; padding-top: 32px; border-top: 1px solid var(--gray-100); }
    .hero-stat-number { font-family: 'Inter', sans-serif; font-size: 2.2rem; font-weight: 900; color: var(--dark); }
    .hero-stat-number span { color: var(--accent); }
    .hero-stat-label { font-size: 0.8rem; color: var(--gray-500); margin-top: 4px; }

    /* HERO VIDEO MOCKUP */
    .hero-visual { position: relative; display: flex; justify-content: center; align-items: center; }
    .hero-video-wrapper { position: relative; width: 300px; border-radius: 32px; overflow: hidden; box-shadow: var(--shadow-xl); background: #000; }
    .hero-video-wrapper::before { content: ''; position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 120px; height: 24px; background: #000; border-radius: 0 0 16px 16px; z-index: 3; }
    .hero-video-wrapper video { width: 100%; display: block; border-radius: 32px; }
    .floating-badge { position: absolute; background: white; border-radius: var(--radius); padding: 12px 16px; box-shadow: var(--shadow-lg); font-size: 0.8rem; display: flex; align-items: center; gap: 10px; }
    .floating-badge-1 { top: 12%; right: -24%; animation: floatSlow 5s ease-in-out infinite; }
    .floating-badge-2 { bottom: 18%; left: -20%; animation: floatSlow 5s ease-in-out infinite 2s; }
    @keyframes floatSlow { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
    .badge-icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 0.9rem; color: white; }
    .badge-text-val { font-weight: 900; font-size: 0.95rem; color: var(--dark); }
    .badge-text-label { font-size: 0.65rem; color: var(--gray-500); }

    /* LOGO MARQUEE */
    .logo-marquee-section {
      padding: 56px 0;
      background: var(--white);
      border-bottom: 1px solid var(--gray-100);
    }
    .logo-marquee-label {
      text-align: center;
      font-size: 0.85rem;
      color: var(--gray-500);
      margin-bottom: 28px;
      font-weight: 500;
      letter-spacing: 0.05em;
    }
    .logo-marquee-label strong { color: var(--dark); font-weight: 700; }
    .marquee-wrapper { overflow: hidden; position: relative; }
    .marquee-wrapper::before, .marquee-wrapper::after { content: ''; position: absolute; top: 0; bottom: 0; width: 120px; z-index: 2; pointer-events: none; }
    .marquee-wrapper::before { left: 0; background: linear-gradient(to right, white, transparent); }
    .marquee-wrapper::after { right: 0; background: linear-gradient(to left, white, transparent); }
    .marquee-track { display: flex; gap: 40px; animation: marquee 40s linear infinite; width: max-content; align-items: center; }
    .marquee-track-reverse { animation-direction: reverse; animation-duration: 45s; }
    @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    .marquee-item { flex-shrink: 0; height: 44px; display: flex; align-items: center; justify-content: center; padding: 0 8px; transition: all 0.3s ease; }
    .marquee-item img { height: 26px; width: auto; object-fit: contain; filter: grayscale(100%); opacity: 0.45; transition: all 0.3s; }
    .marquee-item:hover img { filter: grayscale(0%); opacity: 1; }
    .marquee-item .client-name, .marquee-item .client-text { font-size: 0.85rem; font-weight: 700; color: var(--gray-700); white-space: nowrap; letter-spacing: 0.08em; opacity: 0.45; transition: all 0.3s; }
    .marquee-item:hover .client-name, .marquee-item:hover .client-text { opacity: 1; }

    /* PROBLEM */
    .problem-section { padding: 100px 0; background: var(--white); }
    .problem-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 48px; }
    .problem-card { background: var(--gray-100); border-radius: var(--radius-lg); padding: 36px 28px; text-align: left; transition: all 0.3s ease; border: 1px solid transparent; position: relative; overflow: hidden; }
    .problem-card::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: var(--gradient-accent); }
    .problem-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); border-color: rgba(15,76,129,0.08); }
    .problem-card-icon { width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; }
    .problem-card-icon svg { width: 24px; height: 24px; }
    .problem-card h3 { font-size: 1.05rem; font-weight: 700; margin-bottom: 10px; color: var(--dark); }
    .problem-card p { font-size: 0.88rem; color: var(--gray-500); line-height: 1.7; }

    /* SOLUTION */
    .solution-section { padding: 100px 0; background: var(--gray-100); position: relative; }
    .solution-main { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; margin-bottom: 0; }
    .solution-text h2 { font-size: 2rem; font-weight: 900; line-height: 1.35; margin-bottom: 20px; }
    .solution-text p { font-size: 1rem; color: var(--gray-500); margin-bottom: 28px; line-height: 1.8; }
    .solution-features { display: flex; flex-direction: column; gap: 16px; }
    .solution-feature { display: flex; gap: 14px; align-items: flex-start; background: white; padding: 16px 20px; border-radius: var(--radius); box-shadow: var(--shadow-sm); transition: all 0.3s; }
    .solution-feature:hover { box-shadow: var(--shadow-md); transform: translateX(4px); }
    .sf-icon { width: 40px; height: 40px; min-width: 40px; background: var(--primary-light); border-radius: 10px; display: flex; align-items: center; justify-content: center; }
    .sf-icon svg { width: 20px; height: 20px; color: var(--primary); }
    .solution-feature h4 { font-size: 0.9rem; font-weight: 700; margin-bottom: 2px; }
    .solution-feature p { font-size: 0.82rem; color: var(--gray-500); margin-bottom: 0; }
    .solution-visual { position: relative; z-index: 1; }
    .solution-img { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
    .solution-img video { width: 100%; display: block; }

    /* CASE STUDY */
    .case-section { padding: 100px 0; background: var(--white); }
    .case-card { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; background: var(--gray-100); border-radius: var(--radius-lg); padding: 48px; margin-top: 48px; }
    .case-card-img { border-radius: var(--radius); overflow: hidden; }
    .case-card-img img { width: 100%; height: 280px; object-fit: cover; }
    .case-badge { display: inline-block; background: var(--accent-light); color: var(--accent); font-size: 0.7rem; font-weight: 700; padding: 4px 12px; border-radius: 20px; margin-bottom: 12px; }
    .case-card-body h3 { font-size: 1.3rem; font-weight: 800; margin-bottom: 12px; }
    .case-card-body p { font-size: 0.9rem; color: var(--gray-500); line-height: 1.8; margin-bottom: 16px; }
    .case-metrics { display: flex; gap: 24px; margin-top: 20px; }
    .case-metric { text-align: center; }
    .case-metric-val { font-family: 'Inter', sans-serif; font-size: 1.8rem; font-weight: 900; color: var(--primary); }
    .case-metric-val span { color: var(--accent); }
    .case-metric-label { font-size: 0.7rem; color: var(--gray-500); }
    .case-coming { display: inline-flex; align-items: center; gap: 6px; font-size: 0.8rem; color: var(--gray-500); background: rgba(0,0,0,0.04); padding: 6px 14px; border-radius: 20px; margin-top: 12px; }

    /* STRENGTHS */
    .strengths-section { padding: 100px 0; background: var(--white); }
    .strengths-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; margin-top: 48px; }
    .strength-card { background: var(--gray-100); border-radius: var(--radius-lg); padding: 36px 32px; transition: all 0.3s ease; position: relative; overflow: hidden; }
    .strength-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
    .strength-number { font-family: 'Inter', sans-serif; font-size: 2.4rem; font-weight: 900; color: var(--primary); opacity: 0.15; line-height: 1; margin-bottom: 12px; }
    .strength-card h3 { font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; color: var(--dark); }
    .strength-card p { font-size: 0.88rem; color: var(--gray-500); line-height: 1.7; }

    /* RESULTS */
    .results-section { padding: 100px 0; background: var(--gradient-primary); color: white; }
    .results-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 48px; }
    .result-card { background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.12); border-radius: var(--radius-lg); padding: 32px 24px; text-align: center; transition: all 0.3s ease; }
    .result-card:hover { background: rgba(255,255,255,0.14); transform: translateY(-4px); }
    .result-metric { font-family: 'Inter', sans-serif; font-size: 2.8rem; font-weight: 900; color: white; }
    .result-metric span { color: var(--accent); }
    .result-metric-label { font-size: 0.8rem; color: rgba(255,255,255,0.6); margin-top: 4px; margin-bottom: 16px; }
    .result-card h4 { font-size: 0.95rem; font-weight: 700; margin-bottom: 8px; }
    .result-card p { font-size: 0.82rem; color: rgba(255,255,255,0.6); line-height: 1.6; }

    /* FLOW */
    .flow-section { padding: 100px 0; background: var(--gray-100); }
    .flow-steps { display: flex; gap: 0; margin-top: 60px; position: relative; }
    .flow-steps::before { content: ''; position: absolute; top: 32px; left: 60px; right: 60px; height: 3px; background: var(--gray-300); z-index: 0; }
    .flow-step { flex: 1; text-align: center; position: relative; z-index: 1; padding: 0 12px; }
    .flow-step-num { width: 64px; height: 64px; background: var(--white); color: var(--primary); border: 3px solid var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-family: 'Inter', sans-serif; font-size: 1.2rem; font-weight: 900; transition: all 0.3s; }
    .flow-step:hover .flow-step-num { background: var(--primary); color: white; }
    .flow-step h4 { font-size: 0.88rem; font-weight: 700; margin-bottom: 6px; }
    .flow-step p { font-size: 0.78rem; color: var(--gray-500); line-height: 1.5; }

    /* TEAM */
    .team-section { padding: 100px 0; background: var(--white); }
    .team-content { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; margin-top: 48px; }
    .team-info h3 { font-size: 1.5rem; font-weight: 900; margin-bottom: 20px; }
    .team-info p { font-size: 0.95rem; color: var(--gray-500); margin-bottom: 16px; line-height: 1.8; }
    .team-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 32px; }
    .team-stat { text-align: center; padding: 20px 12px; background: var(--gray-100); border-radius: var(--radius); }
    .team-stat-value { font-family: 'Inter', sans-serif; font-size: 1.6rem; font-weight: 900; color: var(--primary); }
    .team-stat-value span { color: var(--accent); }
    .team-stat-label { font-size: 0.72rem; color: var(--gray-500); margin-top: 4px; }
    .team-photo { border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
    .team-photo img { width: 100%; height: 400px; object-fit: cover; }

    /* GLOBAL IMPACT */
    .global-section { padding: 100px 0; background: var(--gray-100); position: relative; }
    .global-content { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
    .global-text h2 { font-size: 2rem; font-weight: 900; margin-bottom: 20px; line-height: 1.35; }
    .global-text p { font-size: 0.95rem; color: var(--gray-500); line-height: 1.8; margin-bottom: 14px; }
    .global-gallery { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    .global-gallery-item { border-radius: var(--radius); overflow: hidden; position: relative; }
    .global-gallery-item img { width: 100%; height: 180px; object-fit: cover; transition: transform 0.5s; }
    .global-gallery-item:hover img { transform: scale(1.05); }
    .global-gallery-caption { position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); padding: 12px; color: white; font-size: 0.75rem; font-weight: 600; }

    /* FAQ */
    .faq-section { padding: 100px 0; background: var(--white); }
    .faq-list { max-width: 760px; margin: 48px auto 0; }
    .faq-item { border-bottom: 1px solid var(--gray-100); overflow: hidden; }
    .faq-question { padding: 22px 0; display: flex; align-items: center; justify-content: space-between; cursor: pointer; font-weight: 700; font-size: 0.95rem; transition: all 0.3s; user-select: none; }
    .faq-question:hover { color: var(--primary); }
    .faq-toggle { width: 28px; height: 28px; min-width: 28px; background: var(--gray-100); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: var(--gray-500); transition: all 0.3s; }
    .faq-item.active .faq-toggle { background: var(--primary); color: white; transform: rotate(45deg); }
    .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.3s ease; }
    .faq-answer-inner { padding: 0 0 22px; font-size: 0.9rem; color: var(--gray-500); line-height: 1.8; }
    .faq-item.active .faq-answer { max-height: 300px; }

    /* CTA */
    .cta-section { padding: 100px 0; background: var(--gradient-primary); text-align: center; color: var(--white); position: relative; overflow: hidden; }
    .cta-section::before { content: ''; position: absolute; top: -40%; left: 50%; transform: translateX(-50%); width: 120%; height: 120%; background: radial-gradient(ellipse, rgba(255,255,255,0.06) 0%, transparent 60%); }
    .cta-content { position: relative; z-index: 1; }
    .cta-content h2 { font-size: 2.2rem; font-weight: 900; margin-bottom: 20px; }
    .cta-content p { font-size: 1.05rem; color: rgba(255,255,255,0.65); margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto; }

    /* FOOTER */
    .footer { background: var(--dark); color: rgba(255,255,255,0.5); padding: 60px 0 32px; }
    .footer-inner { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 40px; margin-bottom: 40px; }
    .footer-brand p { font-size: 0.85rem; line-height: 1.7; }
    .footer-col h4 { color: white; font-size: 0.85rem; font-weight: 700; margin-bottom: 16px; }
    .footer-col ul li { margin-bottom: 10px; }
    .footer-col ul li a { font-size: 0.8rem; color: rgba(255,255,255,0.5); transition: color 0.3s; }
    .footer-col ul li a:hover { color: var(--accent); }
    .footer-bottom { padding-top: 24px; border-top: 1px solid rgba(255,255,255,0.08); display: flex; justify-content: space-between; align-items: center; font-size: 0.75rem; }

    .floating-cta { position: fixed; bottom: 24px; right: 24px; z-index: 999; opacity: 0; transform: translateY(20px); transition: all 0.4s ease; }
    .floating-cta.visible { opacity: 1; transform: translateY(0); }
    .floating-cta .btn { box-shadow: var(--shadow-xl); font-size: 0.85rem; padding: 14px 24px; }

    .reveal { opacity: 0; transform: translateY(30px); transition: all 0.6s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }

    @media (max-width: 1024px) {
      .hero-inner { grid-template-columns: 1fr; text-align: center; }
      .hero-visual { margin-top: 40px; }
      .hero-stats { justify-content: center; }
      .btn-group { justify-content: center; }
      .solution-main { grid-template-columns: 1fr; }
      .solution-visual { order: -1; }
      .strengths-grid { grid-template-columns: 1fr; }
      .results-grid { grid-template-columns: repeat(2, 1fr); }
      .flow-steps { flex-direction: column; gap: 24px; }
      .flow-steps::before { display: none; }
      .team-content { grid-template-columns: 1fr; }
      .global-content { grid-template-columns: 1fr; }
      .case-card { grid-template-columns: 1fr; }
      .footer-inner { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 768px) {
      .section-title { font-size: 1.6rem; }
      .hero { min-height: auto; padding: 110px 0 60px; }
      .hero-title { font-size: 1.8rem; }
      .hero-stats { flex-direction: column; gap: 16px; align-items: center; }
      .problem-grid { grid-template-columns: 1fr; }
      .results-grid { grid-template-columns: 1fr; }
      .team-stats { grid-template-columns: 1fr; }
      .global-gallery { grid-template-columns: 1fr; }
      .header-nav { display: none; }
      .mobile-menu-btn { display: flex; }
      .footer-inner { grid-template-columns: 1fr; }
      .footer-bottom { flex-direction: column; gap: 12px; text-align: center; }
      .floating-badge { display: none; }
      .hero-video-wrapper { width: 260px; }
    }
  </style>
<?php wp_head(); ?></head>
<body>

  <!-- HEADER -->
  <header class="header" id="header">
    <div class="header-inner">
      <a href="#" class="logo">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/digitive_black.png" alt="digitive">
        <div class="logo-divider"></div>
        <span class="logo-product">カチット</span>
      </a>
      <nav class="header-nav">
        <a href="#problem">課題</a>
        <a href="#solution">サービス</a>
        <a href="#strengths">強み</a>
        <a href="#case">導入事例</a>
        <a href="#flow">導入の流れ</a>
        <a href="#faq">FAQ</a>
      </nav>
      <div class="header-cta">
        <a href="#contact" class="btn btn-accent">無料相談する</a>
      </div>
      <button class="mobile-menu-btn" onclick="document.querySelector('.header-nav').classList.toggle('show')">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero" id="hero">
    <div class="container">
      <div class="hero-inner">
        <div class="hero-text">
          <div class="hero-badge">SIO アクセラレータープログラム採択</div>
          <h1 class="hero-title">
            社内のナレッジを<br>
            <span class="highlight">AIで資産に変える。</span>
          </h1>
          <p class="hero-description">
            マニュアル・動画・属人的な知見を<br>
            AIチャットボットに集約。<br>
            LINEで誰でも、すぐに、社内の情報にアクセスできる世界を。
          </p>
          <div class="btn-group">
            <a href="#contact" class="btn btn-accent">無料相談・お見積り →</a>
            <a href="#solution" class="btn btn-outline">サービス詳細を見る</a>
          </div>
          <div class="hero-stats">
            <div>
              <div class="hero-stat-number">70<span>+</span></div>
              <div class="hero-stat-label">支援企業数</div>
            </div>
            <div>
              <div class="hero-stat-number">200<span>店舗</span></div>
              <div class="hero-stat-label">大型導入実績</div>
            </div>
            <div>
              <div class="hero-stat-number">3<span>期目</span></div>
              <div class="hero-stat-label">AI/DX伴走支援</div>
            </div>
          </div>
        </div>
        <div class="hero-visual">
          <div class="hero-video-wrapper">
            <video autoplay muted loop playsinline>
              <source src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/videos/LINEUIUX01.mp4" type="video/mp4">
            </video>
          </div>
          <div class="floating-badge floating-badge-1">
            <div class="badge-icon" style="background: var(--gradient-primary);">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
            </div>
            <div>
              <div class="badge-text-val">問い合わせ 60%削減</div>
              <div class="badge-text-label">導入企業実績</div>
            </div>
          </div>
          <div class="floating-badge floating-badge-2">
            <div class="badge-icon" style="background: var(--gradient-accent);">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
            </div>
            <div>
              <div class="badge-text-val">動画マニュアル連携</div>
              <div class="badge-text-label">ワンタップでアクセス</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CLIENT LOGO MARQUEE -->
  <section class="logo-marquee-section">
    <p class="logo-marquee-label">業種・規模を問わず <strong>70社以上</strong> の企業・大学・団体を支援</p>
    <div class="marquee-wrapper">
      <div class="marquee-track">
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/nissan.png" alt="日産自動車" style="height:26px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/kansai-u.jpg" alt="関西大学" style="height:30px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/osaka-u.jpg" alt="大阪大学" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/otemon.png" alt="追手門学院大学" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/doshisha-wc.jpg" alt="同志社女子大学" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/tokushima-u.png" alt="徳島大学" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/persol-career.png" alt="パーソルキャリア" style="height:26px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/benefit-one.png" alt="ベネフィットワン" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/infocom.jpg" alt="インフォコム" style="height:26px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/kaneka.png" alt="カネカ" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/konomiya.png" alt="コノミヤ" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/masuda.png" alt="マスダエーセイ" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/sio.png" alt="SIO" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/station-ai.png" alt="Station AI" style="height:28px;"></div>
        <!-- duplicate -->
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/nissan.png" alt="日産自動車" style="height:26px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/kansai-u.jpg" alt="関西大学" style="height:30px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/osaka-u.jpg" alt="大阪大学" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/otemon.png" alt="追手門学院大学" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/doshisha-wc.jpg" alt="同志社女子大学" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/tokushima-u.png" alt="徳島大学" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/persol-career.png" alt="パーソルキャリア" style="height:26px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/benefit-one.png" alt="ベネフィットワン" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/infocom.jpg" alt="インフォコム" style="height:26px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/kaneka.png" alt="カネカ" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/konomiya.png" alt="コノミヤ" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/masuda.png" alt="マスダエーセイ" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/sio.png" alt="SIO" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/station-ai.png" alt="Station AI" style="height:28px;"></div>
      </div>
    </div>
    <div class="marquee-wrapper" style="margin-top: 14px;">
      <div class="marquee-track marquee-track-reverse">
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/expo2025-og.jpg" alt="大阪・関西万博" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/osaka-pref-apple.jpg" alt="大阪府" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/kerry.png" alt="KERRY" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/ims.jpg" alt="分子科学研究所" style="height:26px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/mizukara.png" alt="ミズカラ" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/niyodohonpo.png" alt="丹生堂本舗" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/suita-jc.png" alt="吹田JC" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/fullhouse.svg" alt="フルハウス" style="height:24px;"></div>
        <div class="marquee-item"><span class="client-name">始動 Next Innovator</span></div>
        <div class="marquee-item"><span class="client-name">北陸万博</span></div>
        <div class="marquee-item"><span class="client-name">ナノヒューマンプロ</span></div>
        <div class="marquee-item"><span class="client-name">関西みらいWay</span></div>
        <div class="marquee-item"><span class="client-name">LUANA</span></div>
        <!-- duplicate -->
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/expo2025-og.jpg" alt="大阪・関西万博" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/osaka-pref-apple.jpg" alt="大阪府" style="height:28px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/kerry.png" alt="KERRY" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/ims.jpg" alt="分子科学研究所" style="height:26px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/mizukara.png" alt="ミズカラ" style="height:22px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/niyodohonpo.png" alt="丹生堂本舗" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/suita-jc.png" alt="吹田JC" style="height:24px;"></div>
        <div class="marquee-item"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/fullhouse.svg" alt="フルハウス" style="height:24px;"></div>
        <div class="marquee-item"><span class="client-name">始動 Next Innovator</span></div>
        <div class="marquee-item"><span class="client-name">北陸万博</span></div>
        <div class="marquee-item"><span class="client-name">ナノヒューマンプロ</span></div>
        <div class="marquee-item"><span class="client-name">関西みらいWay</span></div>
        <div class="marquee-item"><span class="client-name">LUANA</span></div>
      </div>
    </div>
  </section>

  <!-- GLOBAL IMPACT -->
  <section class="global-section">
    <div class="container">
      <div class="global-content reveal">
        <div class="global-text">
          <span class="section-label">Global Impact</span>
          <h2>世界中の子どもたちに、<br>挑戦のきっかけを。</h2>
          <p>digitiveは事業活動だけでなく、タイ・カンボジアを中心に、子どもたちへの映像制作・デジタルスキル教育を行っています。</p>
          <p>テクノロジーで人々の可能性を解放する。その想いは、カチットのサービスにも、海外でのDX教育支援にも、同じ根を持っています。</p>
          <p style="color: var(--gray-300); font-style: italic; font-size: 0.85rem; margin-top: 20px;">「挑戦のきっかけを作り、挑戦者の想いを広げる。」</p>
        </div>
        <div class="global-gallery">
          <div class="global-gallery-item">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/images/digitive-activity-img2.jpg" alt="タイでの映像授業">
            <div class="global-gallery-caption">タイ・スリン県 映像制作講義</div>
          </div>
          <div class="global-gallery-item">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/images/digitive-activity-img3.jpg" alt="カンボジア教育支援">
            <div class="global-gallery-caption">カンボジア 写真・映像教育</div>
          </div>
          <div class="global-gallery-item">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/images/digitive-activity-img4.jpg" alt="大学講義">
            <div class="global-gallery-caption">関西大学 クリエイティブ講義</div>
          </div>
          <div class="global-gallery-item">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/images/digitive-activity-img1-2.jpg" alt="子どもたちとの交流">
            <div class="global-gallery-caption">DX教育支援の拡大</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROBLEM -->
  <section class="problem-section" id="problem">
    <div class="container">
      <div class="text-center reveal">
        <span class="section-label">Problem</span>
        <h2 class="section-title">こんな課題、ありませんか？</h2>
        <p class="section-subtitle">属人化・マニュアル形骸化・情報の分散。組織の成長を止める「見えないコスト」が積み重なっています。</p>
      </div>
      <div class="problem-grid">
        <div class="problem-card reveal">
          <div class="problem-card-icon" style="background: var(--primary-light);">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
          </div>
          <h3>マニュアルが見つからない・使われない</h3>
          <p>せっかく作ったマニュアルが、どこにあるか分からない。情報が散在し、結局誰かに聞いてしまう。</p>
        </div>
        <div class="problem-card reveal">
          <div class="problem-card-icon" style="background: var(--accent-light);">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>「できる人」への質問集中</h3>
          <p>優秀な人、優しい人に質問が集中。本来の業務時間が奪われ、バーンアウトの原因にも。</p>
        </div>
        <div class="problem-card reveal">
          <div class="problem-card-icon" style="background: #f0e6ff;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
          </div>
          <h3>ナレッジが退職と共に消える</h3>
          <p>事業承継や人材の入れ替わりで、長年培った経験則やノウハウが組織から失われていく。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SOLUTION -->
  <section class="solution-section" id="solution">
    <div class="container">
      <div class="text-center reveal">
        <span class="section-label">Solution</span>
        <h2 class="section-title">カチットが、すべて解決します。</h2>
        <p class="section-subtitle">社内情報を蓄える仕組みと、AIボットに聞ける仕組み。会社ごとにカスタム構築し、定着まで伴走します。</p>
      </div>
      <div class="solution-main reveal">
        <div class="solution-text">
          <h2>マニュアル × 動画 × AI<br>を1つに統合</h2>
          <p>LINEやチャットで質問するだけで、AIがマニュアル・動画・属人的ナレッジから最適な回答を提示。</p>
          <div class="solution-features">
            <div class="solution-feature">
              <div class="sf-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              </div>
              <div>
                <h4>LINE連携で誰でも簡単アクセス</h4>
                <p>普段使い慣れたLINEの形式でAIに質問。ITリテラシーを問いません。</p>
              </div>
            </div>
            <div class="solution-feature">
              <div class="sf-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
              </div>
              <div>
                <h4>動画マニュアルと連携</h4>
                <p>テキスト回答だけでなく、該当する動画マニュアルへワンタップでアクセス。</p>
              </div>
            </div>
            <div class="solution-feature">
              <div class="sf-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
              <div>
                <h4>属人的ナレッジもAIに蓄積</h4>
                <p>経営者の想い、トップ営業のノウハウ。ヒアリングを通じてAIに組み込みます。</p>
              </div>
            </div>
            <div class="solution-feature">
              <div class="sf-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div>
                <h4>自動記録で知見を資産化</h4>
                <p>ミーティング・電話・チャットを自動記録。1分1秒の知見を組織の財産に。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="solution-visual">
          <div class="solution-img">
            <video autoplay muted loop playsinline style="border-radius: var(--radius-lg);">
              <source src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/videos/LINEUIUX01.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CASE STUDY -->
  <section class="case-section" id="case">
    <div class="container">
      <div class="text-center reveal">
        <span class="section-label">Case Study</span>
        <h2 class="section-title">導入事例</h2>
        <p class="section-subtitle">全国チェーンから中小企業まで。カチットが組織のナレッジ課題を解決しています。</p>
      </div>
      <div class="case-card reveal">
        <div class="case-card-img">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/konomiya.png" alt="スーパーコノミヤ" style="height: 280px; object-fit: contain; background: white; padding: 40px;">
        </div>
        <div class="case-card-body">
          <span class="case-badge">多店舗チェーン / 200店舗</span>
          <h3>スーパーコノミヤ様</h3>
          <p>マニュアルは整備されていたものの、現場で活用されず本部への問い合わせが絶えない状態。カチットを導入し、現場で聞かれた質問をそのまま学習に反映する仕組みを構築。</p>
          <p>LINEベースのAIチャットボットで、店舗スタッフが即座に疑問を解決できる環境を実現しています。</p>
          <div class="case-metrics">
            <div class="case-metric">
              <div class="case-metric-val">200<span>店舗</span></div>
              <div class="case-metric-label">対象店舗数</div>
            </div>
            <div class="case-metric">
              <div class="case-metric-val">60<span>%</span></div>
              <div class="case-metric-label">問い合わせ削減目標</div>
            </div>
          </div>
          <div class="case-coming">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            導入事例の詳細は準備中です
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STRENGTHS -->
  <section class="strengths-section" id="strengths">
    <div class="container">
      <div class="text-center reveal">
        <span class="section-label">Strengths</span>
        <h2 class="section-title">カチットが選ばれる4つの理由</h2>
        <p class="section-subtitle">ただのチャットボットではありません。構築から定着まで、組織に本当に根付く仕組みを作ります。</p>
      </div>
      <div class="strengths-grid">
        <div class="strength-card reveal">
          <div class="strength-number">01</div>
          <h3>徹底的なヒアリングによるカスタム構築</h3>
          <p>テンプレートではなく、御社のビジネス・文化・課題に合わせて一からAIボットを設計。経営者の想いや、現場の暗黙知まで丁寧にヒアリングして組み込みます。</p>
        </div>
        <div class="strength-card reveal">
          <div class="strength-number">02</div>
          <h3>映像制作のプロによる動画マニュアル</h3>
          <p>AI/DX支援だけでなく、映像制作も手がけるdigitiveだからこそ、質の高い動画マニュアルの制作から内製化支援まで一気通貫で対応。</p>
        </div>
        <div class="strength-card reveal">
          <div class="strength-number">03</div>
          <h3>導入して終わりにしない「伴走」体制</h3>
          <p>ツールを入れるだけでは定着しません。現場の声を拾い、質問データから改善し続ける。社内に根付くまで一緒に走り続けます。</p>
        </div>
        <div class="strength-card reveal">
          <div class="strength-number">04</div>
          <h3>70社以上の支援で培った実践知</h3>
          <p>3期にわたり、大学・大手企業・スタートアップまで70社以上を支援。万博関連案件や大阪府DXパートナー認定の実績が、信頼の証です。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- RESULTS -->
  <section class="results-section" id="results">
    <div class="container">
      <div class="text-center reveal">
        <span class="section-label" style="color: rgba(255,255,255,0.5);">Results</span>
        <h2 class="section-title" style="color: white;">導入で得られる効果</h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.6);">カチット導入により、組織の生産性と知識継承が劇的に変わります。</p>
      </div>
      <div class="results-grid">
        <div class="result-card reveal">
          <div class="result-metric">60<span>%</span></div>
          <div class="result-metric-label">本部への問い合わせ削減</div>
          <h4>多店舗チェーン</h4>
          <p>マニュアルが活用されず本部に質問が集中。カチットで現場起点のナレッジ循環を実現。</p>
        </div>
        <div class="result-card reveal">
          <div class="result-metric">2<span>x</span></div>
          <div class="result-metric-label">新人オンボーディング速度</div>
          <h4>新入社員教育の効率化</h4>
          <p>「誰に聞けばいいか分からない」をゼロに。動画マニュアル+AIで自己解決率が大幅向上。</p>
        </div>
        <div class="result-card reveal">
          <div class="result-metric">∞</div>
          <div class="result-metric-label">知見を永続的に資産化</div>
          <h4>経営者の分身AIボット</h4>
          <p>社長の経営方針・意思決定ロジックを徹底ヒアリング。代替わり後も、組織の軸をぶらさない。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FLOW -->
  <section class="flow-section" id="flow">
    <div class="container">
      <div class="text-center reveal">
        <span class="section-label">Flow</span>
        <h2 class="section-title">導入の流れ</h2>
        <p class="section-subtitle">ヒアリングから構築・定着まで、ワンストップで伴走します。</p>
      </div>
      <div class="flow-steps reveal">
        <div class="flow-step">
          <div class="flow-step-num">1</div>
          <h4>無料ヒアリング</h4>
          <p>課題・現状を丁寧にお伺い</p>
        </div>
        <div class="flow-step">
          <div class="flow-step-num">2</div>
          <h4>情報収集・設計</h4>
          <p>社内資料・ナレッジを徹底収集</p>
        </div>
        <div class="flow-step">
          <div class="flow-step-num">3</div>
          <h4>AIボット構築</h4>
          <p>御社専用のAIボットをカスタム開発</p>
        </div>
        <div class="flow-step">
          <div class="flow-step-num">4</div>
          <h4>動画マニュアル制作</h4>
          <p>必要に応じて動画コンテンツも制作</p>
        </div>
        <div class="flow-step">
          <div class="flow-step-num">5</div>
          <h4>導入・定着伴走</h4>
          <p>運用開始後も改善を続けます</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TEAM -->
  <section class="team-section" id="team">
    <div class="container">
      <div class="text-center reveal">
        <span class="section-label">Team</span>
        <h2 class="section-title">運営チーム</h2>
      </div>
      <div class="team-content reveal">
        <div class="team-info">
          <h3>AI × 映像 × 伴走。<br>この掛け合わせが、カチットの原点。</h3>
          <p>株式会社digitiveは、AI/DX支援と映像制作を両軸に展開。テクノロジーだけでなく「伝える力」を持つチームだからこそ、動画マニュアルとAIチャットボットの掛け合わせを実現できました。</p>
          <p>大阪府DXパートナー認定企業。SIOアクセラレーター採択。始動 Next Innovator選出。大阪・関西万博関連案件にも参画。</p>
          <div class="team-stats">
            <div class="team-stat"><div class="team-stat-value">70<span>+</span></div><div class="team-stat-label">支援企業数</div></div>
            <div class="team-stat"><div class="team-stat-value">3<span>期</span></div><div class="team-stat-label">事業運営</div></div>
            <div class="team-stat"><div class="team-stat-value">2<span>拠点</span></div><div class="team-stat-label">東京 / 大阪</div></div>
          </div>
        </div>
        <div class="team-photo">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/images/digitive-activity-img1.jpg" alt="digitive チーム">
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section" id="faq">
    <div class="container">
      <div class="text-center reveal">
        <span class="section-label">FAQ</span>
        <h2 class="section-title">よくあるご質問</h2>
      </div>
      <div class="faq-list">
        <div class="faq-item reveal">
          <div class="faq-question" onclick="this.parentElement.classList.toggle('active')"><span>導入にはどれくらいの期間がかかりますか？</span><div class="faq-toggle">+</div></div>
          <div class="faq-answer"><div class="faq-answer-inner">ヒアリングから初期構築まで通常1〜2ヶ月程度です。企業規模や蓄積したい情報量によって変動しますので、まずは無料ヒアリングでご相談ください。</div></div>
        </div>
        <div class="faq-item reveal">
          <div class="faq-question" onclick="this.parentElement.classList.toggle('active')"><span>ITに詳しくない社員でも使えますか？</span><div class="faq-toggle">+</div></div>
          <div class="faq-answer"><div class="faq-answer-inner">はい。LINEでメッセージを送る感覚でご利用いただけます。特別なアプリのインストールやITスキルは不要です。</div></div>
        </div>
        <div class="faq-item reveal">
          <div class="faq-question" onclick="this.parentElement.classList.toggle('active')"><span>動画マニュアルの制作もお願いできますか？</span><div class="faq-toggle">+</div></div>
          <div class="faq-answer"><div class="faq-answer-inner">はい。弊社は映像制作事業も展開しておりますので、動画マニュアルの企画・撮影・編集から、AIチャットボットへの連携まで一気通貫で対応可能です。</div></div>
        </div>
        <div class="faq-item reveal">
          <div class="faq-question" onclick="this.parentElement.classList.toggle('active')"><span>費用はどれくらいですか？</span><div class="faq-toggle">+</div></div>
          <div class="faq-answer"><div class="faq-answer-inner">企業規模や導入範囲によって異なります。月額制のプランをご用意しておりますので、まずは無料ヒアリングにてお気軽にご相談ください。</div></div>
        </div>
        <div class="faq-item reveal">
          <div class="faq-question" onclick="this.parentElement.classList.toggle('active')"><span>セキュリティは大丈夫ですか？</span><div class="faq-toggle">+</div></div>
          <div class="faq-answer"><div class="faq-answer-inner">企業ごとに独立した環境を構築し、データは暗号化して管理しています。セキュリティには万全の体制を整えています。</div></div>
        </div>
        <div class="faq-item reveal">
          <div class="faq-question" onclick="this.parentElement.classList.toggle('active')"><span>既存のマニュアルや資料をそのまま使えますか？</span><div class="faq-toggle">+</div></div>
          <div class="faq-answer"><div class="faq-answer-inner">はい。既存のPDF、Word、スプレッドシート、動画など、あらゆる形式の資料をAIに学習させることが可能です。</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section" id="contact">
    <div class="container">
      <div class="cta-content reveal">
        <span class="section-label" style="color: rgba(255,255,255,0.5);">Contact</span>
        <h2>まずは無料ヒアリングから。</h2>
        <p>御社の課題をお伺いし、カチットでどう解決できるかご提案します。お気軽にご相談ください。</p>
        <div class="btn-group" style="justify-content: center;">
          <a href="mailto:info@digitive.jp" class="btn btn-accent">無料相談・お見積り →</a>
          <a href="https://digitive.jp/" target="_blank" class="btn btn-white">会社サイトを見る</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-brand">
          <div class="logo" style="margin-bottom: 16px;">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/lp-assets/logos/digitive_white.png" alt="digitive" style="height: 20px;">
            <div class="logo-divider" style="background: rgba(255,255,255,0.2);"></div>
            <span class="logo-product" style="color: white;">カチット</span>
          </div>
          <p>社内のナレッジをAIで資産に変える。<br>株式会社digitive が提供するAIナレッジマネジメントサービス。</p>
        </div>
        <div class="footer-col">
          <h4>サービス</h4>
          <ul>
            <li><a href="#solution">カチットとは</a></li>
            <li><a href="#strengths">選ばれる理由</a></li>
            <li><a href="#case">導入事例</a></li>
            <li><a href="#flow">導入の流れ</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>会社情報</h4>
          <ul>
            <li><a href="https://digitive.jp/" target="_blank">コーポレートサイト</a></li>
            <li><a href="https://digitive.jp/news/digitive-school/" target="_blank">社会貢献活動</a></li>
            <li><a href="creative-lp.html">映像制作サービス</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>お問い合わせ</h4>
          <ul>
            <li><a href="mailto:info@digitive.jp">info@digitive.jp</a></li>
            <li><a href="#contact">無料相談する</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 株式会社digitive. All Rights Reserved.</p>
        <p>Unleashing Possibilities</p>
      </div>
    </div>
  </footer>

  <div class="floating-cta" id="floatingCta">
    <a href="#contact" class="btn btn-accent">無料相談する →</a>
  </div>

  <script>
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    reveals.forEach(el => observer.observe(el));

    const floatingCta = document.getElementById('floatingCta');
    window.addEventListener('scroll', () => { floatingCta.classList.toggle('visible', window.scrollY > 600); });

    const header = document.getElementById('header');
    window.addEventListener('scroll', () => { header.style.boxShadow = window.scrollY > 10 ? '0 2px 20px rgba(0,0,0,0.08)' : 'none'; });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    });
  </script>
<?php wp_footer(); ?></body>
</html>
